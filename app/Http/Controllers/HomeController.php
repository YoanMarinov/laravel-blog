<?php namespace App\Http\Controllers;

use App\Post;

class HomeController extends Controller
{

    public function index()
    {
        $posts = Post::get();
        return view('index', compact('posts'));
    }

}
