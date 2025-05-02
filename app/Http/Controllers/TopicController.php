<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function pageTopicData()
    {
        $allAdminTopics = Topic::orderBy("id", "DESC")->get();
        return view("admin.topic", compact("allAdminTopics"));
    }
        
    public function selectTopicInPostAdmin()
    {
        $selectTopicInPost = Topic::all();
        return view("admin/post", compact("selectTopicInPost"));
    }
        
    public function insertTopicData(Request $request)
    {
        Topic::create([
            'topicName' => $request->topic,
            'description' => $request->description,
        ]);
        return redirect()->back()->with("msg", "success");
    }
}
