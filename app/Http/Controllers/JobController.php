<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class JobController extends Controller
{
  
  public function dashboard()
{
  $jobs = [];
  if(Auth::check()){
    $jobs = Auth::user()->jobs()->latest()->get();
  }

 return view('dashboard', compact('jobs'));
}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $jobs = Job::latest()->filter(request (['search']))->paginate(4);
        return view('job.index')->with(['jobs' => $jobs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('job.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jobInfo = $request->validate([
       'title' => ['required','max:255'],
        'category' => 'required',
        'industry' => 'required',
        'type' => 'required',
        'location' => ['required','max:255'],
        'attachment' =>'nullable|image|mimes:jpeg,png,jpg,pdf|size:2048',
        'name' => 'required',
        'description' => 'required',
        'email' => ['required','email','max:255'],
        'qualifications' => 'required'
          ]);
        // user_id = authenticated user id
        $jobInfo['user_id']= Auth::id();
        
  if($request->hasFile('attachment')){        $jobInfo['attachment'] = $request->file('attachment')->store('attachments', 'public');
  }
        // Store job in database 
        Job::create($jobInfo);
      
    return redirect('/dashboard')->with('message', 'Job Post Created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
   return view('job.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
   if(Auth::user()->id !== $job['user_id'] ){
      return redirect('/dashboard');
    }
  return view('job.edit', ['job' => $job]);
  }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
 if(Auth::user()->id !== $job['user_id'] ){
      return redirect('/');
    }
       $jobInfo = $request->validate([
        'title' => ['required','max:255'],
        'category' => 'required',
        'industry' => 'required',
        'type' => 'required',
        'location' => ['required','max:255'],
        'name' => 'required',
        'description' => 'required',
        'email' => ['required','email','max:255'],
        'qualifications' => 'required'
          ]);
          

   if($request->hasFile('attachment')){  
     $jobInfo['attachment'] = $request->file('attachment')->store('attachments', 'public');   
     }
   


      
      $job->update($jobInfo);
      return redirect('/dashboard')->with('message', 'Job Post Updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
 if(Auth::user()->id !==$job['user_id']){
         return redirect('/dashboard');
   }
   $job->delete();
   return redirect('/dashboard')->with('message', 'Job Post Deleted successfully');
   
    }
}
