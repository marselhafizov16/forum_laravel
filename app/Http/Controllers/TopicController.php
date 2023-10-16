<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Topic;
use App\Models\Comment;

class TopicController extends Controller
{
    public function createtopic(Request $request) 
    {
        $username = $request->user()->name;
        return view('createtopic', ['name' => $username]);
    }

    public function storetopic(Request $request)
    {
        if ($request->has('category') and $request->has('topic')) 
        {
            $topic = new Topic;
            $topic->category = $request->input('category');
            $topic->topic = $request->input('topic');
            $topic->author = $request->user()->name;
            $topic->user_id = $request->user()->id;
            $topic->save();

            return redirect()->route('mytopics');
        }
    }

    public function thistopic($id)
    {
        $topic = Topic::find($id);
        $comments = Comment::where('topic_id', $id)->orderBy('created_at', 'desc')->cursorPaginate(15);

        $count = 0;
        foreach ($comments as $comment) {
            $count += 1;
        }

        return view('thistopic', ['topic' => $topic, 'comments' => $comments, 'count' => $count]);
    }

    public function mytopics(Request $request) 
    {
        $id = $request->user()->id;
        $topics = Topic::where('user_id', $id)->orderBy('created_at', 'desc')->get();

        $count = 0;
        foreach ($topics as $topic) {
            $count += 1;
        }
        return view('mytopics', ['topics' => $topics, 'count' => $count]);
    }

    public function edit($id) 
    {
        $topic = Topic::find($id);
        return view('edit', ['topic' => $topic]);
    }

    public function editstore($id, Request $request)
    {
        $topic = Topic::find($id);
        $topic->category = $request->input('category');
        $topic->topic = $request->input('topic');
        $topic->save();

        return redirect()->route('mytopics');
    }
}
