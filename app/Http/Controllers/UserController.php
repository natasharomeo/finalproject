<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Posts;
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
        'fname'=>'required',
        'lname'=>'required',
        'email'=>'required|email|unique:admins',
        'dob'=>'required',
        'city'=>'required',
        'suburb'=>'required',
        'phoneNo'=>'required',
        'status'=>'required',
        'password'=>'required'
       
    ]);

    //insert data into database 
    $user = new Users;
    $user->fname = $request->fname;
    $user->lname = $request->lname;
    $user->email = $request->email;
    $user->dob = $request->dob;
    $user->city = $request->city;
    $user->suburb = $request->suburb;
    $user->phoneNo = $request->phoneNo;
    $user->status = $request->status;
    $user->password = Hash::make($request->password);
         $save = $user->save();

         if($save){
            return back()->with('success','New User has been successfuly added to database');
         }else{
             return back()->with('fail','Something went wrong, try again later');
         }
    }


    function check(Request $request){
        //Validate requests
        $request->validate([
             'email'=>'required|email',
             'password'=>'required'
        ]);
        
        //query to fetch user with requested email from database 
        $userInfo = Users::where('email','=', $request->email)->first();
        
        if(!$userInfo){
            return back()->with('fail','We do not recognize your email address');
        }
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('/dashboard');
//checks password
            }else{
                return back()->with('fail','Incorrect password');
            }
        }

        function dashboard (){
        $data = ['LoggedUserInfo'=>Users::where('id','=', session('LoggedUser'))->first()];
        $posts = Posts::all();
        return view('/dashboard', $data, compact('posts'));
        }

       // function announcments (){
       // $data = ['LoggedUserInfo'=>Users::where('id','=', session('LoggedUser'))->first()];
       // $posts = Posts::all();
       // return view('/dashboard', compact('posts'));
       // }
        


        function logout(){
            if(session()->has('LoggedUser')){
                session()->pull('LoggedUser');
                return redirect('/auth/login');
            }
        }
  
    }

    //new code