<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function pagePostData()
    {
        return view("admin.post");
    }

    public function insertPostData(Request $request)
    {
        $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
