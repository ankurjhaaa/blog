<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function pageTopicData()
    {
        return view("admin.topic");
    }
    public function homeTopicView()
    {
        $allTopics = Topic::orderBy("id", "DESC")->get();
        return view("home", compact("allTopics"));
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
