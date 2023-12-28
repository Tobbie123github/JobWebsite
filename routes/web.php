<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\JobController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [JobController::class ,'index']);

//Route::middleware(['restrictLogin'])->group(function (){
  
  //show signup form
Route::get('/signup' , [UserController::class, 'create'])->name('signup.create')->middleware('guest');
  
// show signin form
Route::get('/signin' , [UserController::class, 'signin'])->name('signin')->middleware('guest');
//});

Route::post('/signup', [UserController::class, 'store'])->name('signup.store');
Route::post('/signin', [UserController::class, 'login'])->name('signin.login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/dashboard', [JobController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/edit/{job}', [JobController::class, 'edit'])->name('edit')->middleware('auth');
Route::put('/edit/{job}', [JobController::class, 'update'])->name('update')->middleware('auth');
// Route::get('/jobpost/createjob' , [JobController::class, 'create'])->name('jobpost.create');
// Route::post('/jobpost/createjob' , [JobController::class, 'store'])->name('jobpost.store');
Route::delete('/delete/{job}', [JobController::class, 'destroy'])->name('delete')->middleware('auth');

Route::resource('job', JobController::class)->middleware('auth');
