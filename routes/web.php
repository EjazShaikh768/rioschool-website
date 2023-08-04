<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\ContactController;

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
Route::get('admins',function(){
    return redirect('admin.Login');
});

Route::get('admin',[AuthController::class,'Signin']);

Route::post('admins',[AuthController::class,'admin_signin'])->name('admin_signin');

Route::get('logout',[AuthController::class,'logout'])->name('logout');

Route::get('dashboard',[AuthController::class,'dashboard'])->name('dashboard');

Route::get('catshow',[CatController::class,'View'])->name('view');

Route::get('see',[ContactController::class,'View']);
// Route::get('dashboard',function(){
//     return view('admin.Dashboard');
//  });
Route::get('signin',function(){
    return view('admin.Signin');
 });
Route::get('Blog_cat',function(){
    return view('admin.Blog_cat');
 });
Route::get('Blogs',function(){
    return view('admin.Blogs');
 });
Route::get('Gallery',function(){
    return view('admin.Gallery');
 });
Route::get('Messages',function(){
    return view('admin.Messages');
 });
Route::get('Our_toppers',function(){
    return view('admin.Our_toppers');
 });
Route::get('Complaints',function(){
    return view('admin.Complaints');
 });
