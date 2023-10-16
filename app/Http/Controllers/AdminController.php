<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Topic;
use App\Models\Comment;

class AdminController extends Controller
{
    public function start(Request $request) {
        $users = User::all();
        $topics = Topic::all();
        $comments = Comment::all();

        return view('adminstart', ['users' => $users, 'topics' => $topics, 'comments' => $comments]);
    }
}
