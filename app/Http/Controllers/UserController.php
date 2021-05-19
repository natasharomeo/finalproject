<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login (){
    return view ('auth.login');
    }

   function register ()
   {
       return view ('auth.register');
   }

   function save (Request $request)
   {
    //return $request ->input();
    //validate requests
    $request->validate([
        'name'=>'required',
        'email'=>'required|email|unique:admins',
        'password'=>'required'
       
    ]);

    //insert data into database 
    $admin = new Admin;
    $admin->name = $request->name;
    $admin->email = $request->email;
    $admin->password = Hash::make($request->password);
    $save = $admin->save();

    }


    function check(Request $request){
        //Validate requests
        $request->validate([
             'email'=>'required|email',
             'password'=>'required'
        ]);
        
        //query to fetch user with requested email from database 
        $userInfo = Admin::where('email','=', $request->email)->first();
        
        if(!$userInfo){
            return back()->with('fail','We do not recognize your email address');
        }
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('admin/dashboard');
//checks password
            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }

