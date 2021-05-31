<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;
use App\Models\Ride;

class PagesController extends Controller
{
  
 function training()
    {
          return view('training')
          ->with('training', Training::all());

    }

    function ride()
    {
          return view('ride')
          ->with('ride', Ride::all());

    }


  
}

