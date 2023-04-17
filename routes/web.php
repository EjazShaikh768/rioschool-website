<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('WebPages.welcome');
});
Route::get('blog',function(){
    return view('WebPages.blogs');
});

Route::get('about',function(){
   return view('WebPages.about');
});

Route::get('contact',function(){
   return view('WebPages.contact');
});
Route::get('gallery',function(){
   return view('WebPages.gallery');
});
Route::get('teachingStaff',function(){
   return view('WebPages.teacherstaff');
});
Route::get('nonoteachstaff',function(){
   return view('WebPages.nonteachingstaff');
});
Route::get('managment',function(){
   return view('WebPages.schoolManagement');
});
Route::get('inspiration',function(){
   return view('WebPages.inspiration');
});
Route::get('activity',function(){
   return view('WebPages.activity');
});
// admin panel routing
Route::get('admin',function(){
    return view('admin.signin');
 });
Route::get('dashboard',function(){
    return view('admin.dashboard');
 });
Route::get('message',function(){
    return view('admin.messages');
 });
Route::get('bloging',function(){
    return view('admin.blogs');
 });
