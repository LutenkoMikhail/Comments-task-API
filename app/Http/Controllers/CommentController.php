<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function show(Post $post, Comment $comment)
    {
        return response()->json($comment, 200);
    }
}
