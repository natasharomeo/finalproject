<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Users;
use Facade\FlareClient\View;
use Illuminate\Foundation\Auth\User;

class AdminController extends Controller

{
    public function dashboard()
    {
    return view ('admin/admindashboard');
    }

    function adminuser (){
        $users = Users::all();
        return view('/adminuser', compact('users'));
        }

        public function show($id)
        {
            $users = Users::find($id);
            return view('/edituser', ['users' => $users]);
        }

        public function update(Request $req)
        {
            $users = Users::find($req->id);
            $users -> fname=$req->fname;
            $users -> lname=$req->lname;
            $users -> email=$req->email;
            $users -> save();
            return redirect('/adminuser');

        }

}
