<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function training()
    {
        return view('training');
    }


    public function ride()
    {
        return view('ride');
    }

    public function example()
    {
        return view('example');
    }

}


