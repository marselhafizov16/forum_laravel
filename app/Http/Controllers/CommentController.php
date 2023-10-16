<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Topic;
use App\Models\Comment;

class CommentController extends Controller
{
    public function commentcreate(Request $request) 
    {
        $comment = new Comment;
        $comment->comment = $request->input('comment');
        $comment->author = $request->user()->name;
        $comment->user_id = $request->user()->id;
        $comment->topic_id = $request->input('id');
        $comment->save();

        $id = $request->input('id');

        return redirect()->route('thistopic', ['id' => $id]);
    }
}
