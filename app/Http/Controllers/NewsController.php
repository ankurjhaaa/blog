<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function newsPersonal($id)
{
    $post = Post::find($id);
    $related = Post::where('topicId',$id)->get();
    return view('news', compact('post','related'));
}
}