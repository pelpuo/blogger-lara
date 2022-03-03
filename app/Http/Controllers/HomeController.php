<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    // Homepage
    public function index(){

        $posts = Post::orderBy('created_at', 'desc')->paginate(12);

        return view('index')->with('posts', $posts);
    }

    // Dashboard
    public function dashboard(){
        $posts =  auth()->user()->posts;
        $user = auth()->user();
        return view('dashboard')->with('posts', $posts)->with('user', $user);
    }

}
