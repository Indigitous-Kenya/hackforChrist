<?php

namespace App\Http\Controllers;

use App\model\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::with(['author', 'post'])->paginate();
        return view('')->withComments($comments);
    }

    public function show($id)
    {
        return view('')->withComments(Comment::find($id));
    }
}
