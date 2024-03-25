<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function commentPost()
    {
        $postFirst = Post::find(1);
        $commentFirst = $postFirst->comments;

        $postSecond = Post::find(2);
        $commentSecond = $postSecond->comments;

        $allposts = Post::all();
        $allcomments = Comment::all();

        return view('index',compact('commentsFirst','commentsSecond','allposts','allcomments'));
    }
}
