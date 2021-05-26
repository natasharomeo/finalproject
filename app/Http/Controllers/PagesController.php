<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function training()
    {
        return view('training');
    }
}
