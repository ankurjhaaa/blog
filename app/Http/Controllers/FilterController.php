<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Topic;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function filterTopic($id)
    {
        $posts = Post::where('topicId', $id)->get();
        $allTopics = Topic::orderBy("id", "DESC")->get();
        return view('filter', compact('posts','allTopics'));
    }
    


}
