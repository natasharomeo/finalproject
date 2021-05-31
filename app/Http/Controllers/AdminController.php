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
        $data = ['LoggedUserInfo'=>Users::where('id','=', session('LoggedUser'))->first()];
        return view('/adminuser', $data)
        ->with('users', Users::all());
        
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
            $users -> status=$req->status;
            $users -> role=$req->role;
            $users -> save();
            return redirect('/adminuser');

        }

    
    

}
