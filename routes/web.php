<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TopicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/admin', [HomeController::class,"pageDashboard"])->name("adminDashboard.page");


Route::get('/admin/topic', [TopicController::class,"pageTopicData"])->name("adminTopic.page");
Route::post('/admin/insertTopic', [TopicController::class,"insertTopicData"])->name("insertTopic.page");


// Route::get('/admin/post', [TopicController::class,"pagePostData"])->name("adminPost.page");
Route::get('/admin/post', function () {
    return view('admin.post');
});
