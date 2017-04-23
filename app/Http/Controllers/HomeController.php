<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Post;
use App\Comment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::all();
        $posts = Post::orderBy('created_at','asc')->paginate(10);
        return view('home',[
            'posts'    => $posts,
            'comments' => $comments
            ]);
    }

    public function admin()
    { 
        $comments = Comment::get();
        $posts    = Post::get();
        return view('admin.index',[
            'posts'    => $posts,
            'comments' => $comments
            ]);
    }

}
