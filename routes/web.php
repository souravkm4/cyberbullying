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
    return view('index');
})->name('/');
Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('user.getquestions',[App\Http\Controllers\GuestController::class,'getquestions'])->name('user.getquestions');
Route::post('addblog',[App\Http\Controllers\GuestController::class,'insertblog'])->name('addblog');
Route::get('/blog', [App\Http\Controllers\GuestController::class,'viewblogs'])->name('blog');
Route::get('/contact us', function () {
    return view('contactus');
})->name('contactus');
Route::post('postcontact',[App\Http\Controllers\GuestController::class,'contact'])->name('postcontact');
Route::get('/register', function () {
    return view('signup');
})->name('register');



//admin routes


Route::get('/new', function () {
    return view('admin/new');
})->name('new');

Route::get('resource', function () {
    return view('resource');
})->name('resource');
Route::get('resource',[App\Http\Controllers\GuestController::class,'viewresource'])->name('resource');
Route::post('rating',[App\Http\Controllers\GuestController::class,'postrating'])->name('rating');


Route::get('/user.viewcomplaint', function () {
    return view('user/viewcomplaint');
})->name('user.viewcomplaint');
Route::get('adminregistration',[App\Http\Controllers\AdminRegistrationController::class,'index'])->name('adminregistration');
Route::post('postadminform',[App\Http\Controllers\AdminRegistrationController::class,'save'])->name('postadminform');
Route::get('victimregistration',[App\Http\Controllers\VictimRegistrationController::class,'index'])->name('victimregistration');
Route::post('addvictim',[App\Http\Controllers\VictimRegistrationController::class,'save'])->name('addvictim');
Route::post('postlogin',[App\Http\Controllers\GuestController::class,'postlogin'])->name('postlogin');
Route::get('logout',[App\Http\Controllers\GuestController::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth','prevent-back-history']],function(){
    //admin routes
    Route::get('/adminhome',[App\Http\Controllers\AdminController::class,'index'])->name('adminhome');
    Route::get('/admin.addresources',[App\Http\Controllers\AdminController::class,'addresource'])->name('admin.addresources');
    Route::post('admin.addresource',[App\Http\Controllers\AdminController::class,'addaresource'])->name('admin.saveresource');
    Route::get('/admin.addresources',[App\Http\Controllers\AdminController::class,'viewresource'])->name('admin.addresources');
    Route::get('addquiz',[App\Http\Controllers\AdminController::class,'addquizpage'])->name('addquiz');
    Route::post('addquestion',[App\Http\Controllers\AdminController::class,'save'])->name('addquestion');
    Route::post('admin.deletecomplaint',[App\Http\Controllers\AdminController::class,'deletecomplaint'])->name('admin.deletecomplaint');
    Route::post('admin.replytocomplaint',[App\Http\Controllers\AdminController::class,'replytocomplaint'])->name('admin.replytocomplaint');
  
    Route::get('/admin.profile', function () {
        return view('admin/profile');
    })->name('admin.profile');
    Route::post('admin.updateprofile',[App\Http\Controllers\AdminController::class,'profile'])->name('admin.updateprofile');
    Route::get('/admin.addquiz',[App\Http\Controllers\AdminController::class,'addquiz'])->name('admin.addquiz');
    Route::post('admin.deletequestion',[App\Http\Controllers\AdminController::class,'deletequestion'])->name('admin.deletequestion');
    Route::get('/admin.viewblogs', function () {
        return view('admin/viewblogs');
    })->name('admin.viewblogs');
    Route::get('/admin.viewblogs',[App\Http\Controllers\AdminController::class,'readblog'])->name('admin.viewblogs');
    Route::post('admin.deleteblog',[App\Http\Controllers\AdminController::class,'deleteblog'])->name('admin.deleteblog');
    Route::post('admin.postblog',[App\Http\Controllers\AdminController::class,'blogstatus'])->name('admin.postblog');
    Route::get('/admin.changepassword', function () {
        return view('admin/changepassword');
    })->name('admin.changepassword');
    Route::get('/admin.viewquizcompletion', function () {
        return view('admin/viewquizcompletion');
    })->name('admin.viewquizcompletion');
    
    Route::get('/admin.viewreport',[App\Http\Controllers\AdminController::class,'viewreport'])->name('admin.viewreport');
    Route::get('/admin.changepassword',[App\Http\Controllers\AdminController::class,'password'])->name('admin.changepassword');
    Route::post('/admin.changepassword',[App\Http\Controllers\AdminController::class,'updatepassword'])->name('admin.changepassword');
    Route::get('/admin.viewquery',[App\Http\Controllers\AdminController::class,'query'])->name('admin.viewquery');

    Route::get('/admin.viewquery',[App\Http\Controllers\AdminController::class,'viewquery'])->name('admin.viewquery');


    // victim routes
    Route::get('/userhome',[App\Http\Controllers\VictimController::class,'index'])->name('userhome');
    Route::get('/user.complaint',[App\Http\Controllers\VictimController::class,'complaint'])->name('user.complaint');
    Route::post('user.savecomplaint',[App\Http\Controllers\VictimController::class,'addcomplaint'])->name('user.savecomplaint');
    Route::get('/user.viewcomplaint',[App\Http\Controllers\VictimController::class,'view'])->name('user.viewcomplaint');
    Route::get('/user.viewcomplaint',[App\Http\Controllers\VictimController::class,'viewcomplaint'])->name('user.viewcomplaint');
    Route::get('/user.quiz',[App\Http\Controllers\VictimController::class,'quiz'] )
    ->name('user.quiz');
    Route::get('/user.quiz',[App\Http\Controllers\VictimController::class,'addquiz'])->name('user.quiz');
    Route::get('/user.changepassword',[App\Http\Controllers\VictimController::class,'password'])->name('user.changepassword');
    Route::post('/user.changepassword',[App\Http\Controllers\VictimController::class,'updatepassword'])->name('user.changepassword');
    Route::get('/user.userprofile', function () {
        return view('user/userprofile');
    })->name('user.userprofile');
    Route::get('getquiz',[App\Http\Controllers\VictimController::class,'getquiz'] )->name('getquiz');
    Route::post('user.checkquestion',[App\Http\Controllers\VictimController::class,'checkquestion'] )->name('user.checkquestion');
});
