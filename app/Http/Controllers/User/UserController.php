<?php

namespace App\Http\Controllers\User;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
 use App\Models\Job;
 
class UserController extends Controller
{




  public function create(){
    return view('signup');
  }
  public function signin(){
    return view('signin');
  }
  
  //SIGN IN
public function login(Request $request){
    $userInfo = $request->validate([
      'loginname' => 'required',
      'loginpassword'=> 'required',
      ]);
      

    if(!auth()->attempt([
  'name' => $userInfo['loginname'],      'password'=>$userInfo['loginpassword']
      ])){
  return back()->with('error', 'Invalid Credentials');
      }else{
        $request->session()->regenerate();
      }
     
       return redirect('/')->with('message', 'Login Successful');
  
  }
  

  //LOG OUT
    public function logout(){
    Auth::logout();
    return redirect('/')->with('message','Logout Successful');
  }
  // SIGNUP
    public function store(Request $request)
    {
    
      $userInfo = $request->validate([
    'name' => ['required', 'min:3',Rule::unique('users', 'name') ],
    'email' => ['required','email', Rule::unique('users', 'name')],
    'password' => ['required', 'min:5'],
    'is_employer' => 'integer',
    'avatar' => 'required'
    ]);
    
    if($request->hasFile('avatar')){
      $userInfo['avatar'] = $request->file('avatar')->store('avatars', 'public');
    
    }
    
   $user= User::create($userInfo);
    Auth::login($user);
    
    return redirect('/')->with('message', 'Registration Successful');
   
    }
    
    
    
    
}
