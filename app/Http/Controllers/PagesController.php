<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;
use App\Models\Ride;

class PagesController extends Controller
{
  
 

    function ride()
    {
          return view('ride')
          ->with('ride', Ride::all());

    }


  
}

