<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\Course;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/home', function () {
    return view('index');
});

//All courses
Route::get('/home/courses',[CourseController::class,'index']);

//Single course
Route::get('/home/courses/{id}',[CourseController::class,'show']);



Route::get('/home/about', function () {
    return view('about');
});

Route::get('/home/contact', function () {
    return view('contact');
});


Route::get('/home/register', [RegisterController::class,'create']);

Route::post('/home/register', [RegisterController::class,'store']);

//Has to be logged out to see the login option
Route::get('/home/login', [SessionController::class,'create'])->middleware('guest');

Route::post('/home/login', [SessionController::class,'store'])->middleware('guest');

//Has to be logged in to see the logout option
Route::post('/home/logout', [SessionController::class,'destroy'])->middleware('auth');

Route::get('/home/addcourse',[CourseController::class,'create']);

Route::post('/home/addcourse',[CourseController::class,'store']);

Route::get('/home/dashboard',[DashboardController::class,'showdashboard']);

Route::get('/home/dashboard/orders',[DashboardController::class,'showorders']);

Route::get('/home/dashboard/students',[DashboardController::class,'showstudents']);

Route::delete('/home/dashboard/students/{id}', [DashboardController::class, 'destroystudents']);

Route::get('/home/dashboard/instructors',[DashboardController::class,'showinstructors']);

Route::delete('/home/dashboard/instructors/{id}', [DashboardController::class, 'destroyinstructors']);

Route::get('/home/dashboard/messages',[DashboardController::class,'showmessages']);

Route::get('/home/dashboard/courses',[DashboardController::class,'showcourses']);

Route::delete('/home/dashboard/courses/{id}', [DashboardController::class, 'destroycourses']);

Route::get('/home/dashboard/comments',[DashboardController::class,'showcomments']);



// Route::get('/home/dashboard/courses/{id}/edit', [DashboardController::class, 'editcourses']);



Route::get('/hi', function () {
    return response('<h1>Hello World</h1>',200);  //response function decodes the content,default status 200
});
