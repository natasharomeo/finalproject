<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::all();
        return view('/adminposts', compact('posts'));
    }

  


    public function create()
    {
        return view('/addpost');
    }

    public function store()
    {
        $posts = new Posts();
        $posts->title = request('title');
        $posts->description = request('description');
        $posts->author = request('author');
        $posts->save();
        return redirect('/adminposts');
    }


    public function showData($id)
    {
        $posts = Posts::find($id);
        return view('/editpost', ['posts' => $posts]);
    }


    public function update(Request $req)
    {
        $posts = Posts::find($req->id);
        $posts -> title=$req->title;
        $posts -> description=$req->description;
        $posts -> author=$req->author;
        $posts -> save();
        return redirect('/adminposts');
    }
    


    public function delete($id)
    {
        $posts = Posts::find($id);
        $posts->delete ();
        return redirect('/adminposts');

    }

}