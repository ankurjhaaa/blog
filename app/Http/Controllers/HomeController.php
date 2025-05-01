<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Topic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function pageDashboard(){
    //     return view("admin.dashboard");
    // }

    // HomeController.php
public function index()
{
    $allPosts = Post::orderBy("id", "DESC")->get();
    $allTopics = Topic::orderBy("id", "DESC")->get();
    return view('home', compact('allPosts', 'allTopics'));
}
// HomeController.php
public function pageDashboard() {
    $allPosts = Post::orderBy('id', 'DESC')->get();
    $allTopics = Topic::orderBy('id', 'DESC')->get();

    return view('admin.dashboard', compact('allPosts', 'allTopics'));
}

}
