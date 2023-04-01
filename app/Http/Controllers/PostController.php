<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * display list of the resource
     * @return mixed
     */
    public function index(){
        return view('index');
    }

    public function show($id){
        $post = Post::find($id);
        return view('show',compact('post'));
    }

    public function allPosts(){
        $posts = Post::with('comments')->paginate(20);
        return view('template.posts',compact('posts'));
    }
}
