<?php

namespace App\Http\Controllers;
use App\Models\Comment;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function show()
    {
        $comments = Comment::all();
        return view('prq', ['comments' => $comments]);
    }
}
