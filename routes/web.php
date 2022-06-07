<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Validation\Factory;
use App\Http\Controllers\postcontroller;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\PlainThisweekController;
use App\Http\Controllers\CkeditorController;


Route::get('welcome', [postcontroller::class, 'getindex'])->name('welcome');

Route::get('abouts', function () {
    return view('abouts');
})->name('abouts');

Route::get('articles', function () {
    return view('articles');
})->name('articles');

Route::get('articles2', function () {
    return view('articles2');
})->name('articles2');

Route::get('plains', [postcontroller::class, 'getindex'])->name('plains');


// admin/report routes :adminregister.delete
Route::get('post/{id}/like', [postcontroller::class, 'getlikepost'])->name('blog.post.like');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function () {
    Route::get('', [postcontroller::class, 'getadminindex'])->name('admin.index');
    Route::get('listReport', [postcontroller::class, 'getadminlist'])->name('admin.list');
    Route::get('edit/{id}', [postcontroller::class, 'getadminedit'])->name('admin.edit');
    Route::get('Reportdelete/{id}', [postcontroller::class, 'getadmindelete'])->name('admin.delete');
    Route::post('create', [postcontroller::class, 'postadmincreate'])->name('admin.create');
    Route::post('edit', [postcontroller::class, 'postadminupdate'])->name('admin.update');
});
Route::get('post/{id}', [postcontroller::class, 'getpost'])->name('blog.post');
Route::get('admin/create', [postcontroller::class, 'getadmincreate'])->name('admin.create')->middleware(['auth']);
Route::get('/settings', function () {
    // ...
})->middleware(['password.confirm']);
// admin/news routs:
Route::get('news', [NewsController::class, 'getindex'])->name('news');
Route::group(['prefix'=>'admin','middleware'=>'auth'],function () {
    Route::get('News/create', [NewsController::class, 'getadmincreate'])->name('adminNews.create');
    Route::get('News/edit/{id}', [NewsController::class, 'getadminedit'])->name('adminNews.edit');
    Route::get('News/delete/{id}', [NewsController::class, 'getadmindelete'])->name('adminNews.delete');
    Route::get('News/list', [NewsController::class, 'getadminlist'])->name('adminNews.list');
    Route::post('News/create', [NewsController::class, 'postadmincreate'])->name('adminNews.create');
    Route::post('update', [NewsController::class, 'postadminupdate'])->name('adminNews.update');
});
Route::get('NewsPost/{id}', [NewsController::class, 'getpost'])->name('blogNews.post');
//end admin/news routs:

//index route:
Route::get('/', [NewsController::class, 'getmainpage'])->name('index');
//end index route:

//registerForm
//Route::get('registerform',[registercontroller::class,'getadminregisterform'])->name('registerform');
Route::group(['prefix'=>'admin','middleware'=>'auth'],function () {
    Route::get('registerform', [registercontroller::class, 'getadminRegisterForm'])->name('admin.registerform');
    Route::get('registerdelete/{id}', [registercontroller::class, 'getadminregisterdelete'])->name('adminregister.delete');});

Route::get('registerform', [registercontroller::class, 'getregisterform'])->name('registerform');
Route::post('register/create', [registercontroller::class, 'postregister'])->name('register.create');
//End registerForm

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//contactForm
Route::group(['prefix'=>'admin','middleware'=>'auth'],function () {
    Route::get('contactlist', [contactcontroller::class, 'getadmincontactlist'])->name('admin.contactlist');
    Route::get('delete/{id}', [contactcontroller::class, 'getadmincontactdelete'])->name('adminContact.delete');

});
Route::get('contactform', [contactcontroller::class, 'getcontactform'])->name('contactform');
Route::post('contact/create', [contactcontroller::class, 'postcontact'])->name('contact.create');
//End contactForm

//PlainThisweek
Route::group(['prefix'=>'admin','middleware'=>'auth'],function () {
    Route::get('EditPlainThisweek', [PlainThisweekcontroller::class, 'getadminedit'])->name('adminPlainsThisweek.edit');
    Route::post('EditPlainThisweek', [PlainThisweekcontroller::class, 'postadminupdate'])->name('admin.updatePlainsThisweek');
});

//End PlainThiswe


Route::post('sendcomments', [postcontroller::class, 'createPostComment'])->name('comments');
Route::get('showallcomments', [postcontroller::class, 'getComment'])->name('adminComments');
Route::get('acceptcomment/{id}', [postcontroller::class, 'accComment'])->name('admin.accept.comment');
Route::get('delete1/{id}', [postcontroller::class, 'getadmincommentdelete'])->name('adminComment.delete');

Route::post('login', [signincontroller::class, 'singin'])->name('auth.signin');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//ck Editor
Route::get('ckeditor',[CkeditorController::class,'index']);
Route::post('ckeditor/upload',[CkeditorController::class,'upload'])->name('ckeditor.upload');

//admin newscomment
Route::post('sendNewscomments', [NewsController::class, 'createPostComment'])->name('NewsComments');
Route::get('showallNewscomments', [NewsController::class, 'getComment'])->name('NewsadminComments');
Route::get('acceptNewscomment/{id}', [NewsController::class, 'accComment'])->name('admin.accept.Newscomment');
Route::get('delete/{id}', [NewsController::class, 'getadmincommentdelete'])->name('adminNewsComment.delete');
