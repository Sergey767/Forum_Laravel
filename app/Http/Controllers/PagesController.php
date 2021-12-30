<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;
use App\Models\Post;

class PagesController extends Controller
{
    public function home()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(3);

        return view('pages.home', compact('posts'));
    }
}
