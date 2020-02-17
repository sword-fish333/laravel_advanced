<?php

namespace App\Http\Controllers;

use App\Post;
use App\QueryFilters\Active;
use App\QueryFilters\Sort;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class PostsController extends Controller
{
    public function index(){
//        $posts=Post::query();


//        $pipeline
        return view('posts',['posts'=>Post::allPosts()]);
    }
}
