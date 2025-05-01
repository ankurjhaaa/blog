<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TopicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/admin', [HomeController::class, 'pageDashboard'])->name('adminDashboard.page');

// web.php
Route::get('/', [HomeController::class, 'index']);


Route::get('/admin/topic', [TopicController::class,"pageTopicData"])->name("adminTopic.page");
Route::post('/admin/insertTopic', [TopicController::class,"insertTopicData"])->name("insertTopic.page");



Route::get('/admin/post', [PostController::class,"pagePostData"])->name("adminPost.page");
Route::post('/admin/insertPost', [PostController::class,"insertPostData"])->name("adminInsertPost.page");


