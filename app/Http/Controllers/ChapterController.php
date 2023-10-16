<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Topic;
use App\Models\Comment;

class ChapterController extends Controller
{
    public function category($category) 
    {
        $topics = Topic::where('category', $category)->cursorPaginate(15);

        $count = 0;
        foreach ($topics as $topic) {
            $count += 1;
        } 

        return view('categoryview', ['count' => $count, 'topics' => $topics]);
    }
}
