<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Topic;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function pagePostData()
    {
        $selectTopicInPost = Topic::orderBy("id", "DESC")->get();
        return view("admin.post",compact("selectTopicInPost"));
    }

    public function homePostView()
    {
        $allPosts = Post::orderBy("id", "DESC")->get();
        return view("home",compact("allPosts"));
    }
    public function adminPostView()
    {
        $allPosts = Post::orderBy("id", "DESC")->get();
        return view("admin/dashboard",compact("allPosts"));
    }
    



    public function insertPostData(Request $request)
    {
        $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
        
        $imageName = time() . '.' . $request->img->extension();
        $request->img->move(public_path('images'), $imageName);
        
        Post::create([
            'title' => $request->title,
            'author' => $request->author,
            'topicId' => $request->topicId,
            'img' => $imageName, // ✅ Corrected
            'content' => $request->content,
            'status' => $request->status,
        ]);
        
        return redirect()->back()->with("msg", "success");
        
    }
}
