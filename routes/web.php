<?php

use App\Http\Controllers\FilterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TopicController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/admin', [HomeController::class, 'pageDashboard'])->name('adminDashboard.page');


Route::get('/', [HomeController::class, 'index'])->name('index.page');


Route::get('/admin/topic', [TopicController::class,"pageTopicData"])->name("adminTopic.page");
Route::post('/admin/insertTopic', [TopicController::class,"insertTopicData"])->name("insertTopic.page");



Route::get('/admin/post', [PostController::class,"pagePostData"])->name("adminPost.page");
Route::post('/admin/insertPost', [PostController::class,"insertPostData"])->name("adminInsertPost.page");


// news personal pahe 
// Route::get('/news/1',function(){
//     return view("news");
// })->name("news.page");

Route::get('/news/{id}', [NewsController::class, 'newsPersonal'])->name('news.page');


Route::get('/filter/{id}', [FilterController::class, 'filterTopic'])->name('filter.page');
