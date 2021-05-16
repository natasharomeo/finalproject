<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    public function index()
    {
     $postsList = Posts::all();
        return view('adminposts', compact('postsList'));
    }
}

