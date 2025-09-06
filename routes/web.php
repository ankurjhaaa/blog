<?php

use App\Http\Controllers\FilterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\UserController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::middleware("auth")->group(function(){
    Route::get('/admin', [HomeController::class, 'pageDashboard'])->name('adminDashboard.page');
    Route::get('/admin/topic', [TopicController::class,"pageTopicData"])->name("adminTopic.page");
    Route::post('/admin/insertTopic', [TopicController::class,"insertTopicData"])->name("insertTopic.page");
    Route::get('/admin/post', [PostController::class,"pagePostData"])->name("adminPost.page");
    Route::post('/admin/insertPost', [PostController::class,"insertPostData"])->name("adminInsertPost.page");
    
});


Route::get('/', [HomeController::class, 'index'])->name('index.page');




// news personal pahe 
// Route::get('/news/1',function(){
//     return view("news");
// })->name("news.page");

Route::get('/news/{id}', [NewsController::class, 'newsPersonal'])->name('news.page');


Route::get('/filter/{id}', [FilterController::class, 'filterTopic'])->name('filter.page');


Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/securelogin',[UserController::class,'securelogin'])->name('securelogin.page');

Route::get('/register',[UserController::class,'register'])->name('register.page');
Route::post('/creatregister',[UserController::class,'creatregister'])->name('creatregister.page');

Route::get('/securelogout',[UserController::class,'securelogout'])->name('securelogout.page');
