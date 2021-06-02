<?php

namespace App\Http\Controllers;
use App\Models\Badges;
use App\Models\BadgeUser;
use App\Models\Users;
use App\Models\Posts;
use App\Models\Ride;
use App\Models\Training;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpMyAdmin\CheckUserPrivileges;

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
    $user->password =  Hash::make($request->password);
         $save = $user->save();

         if($save){
            return back()->with('success','New User has been successfully created');
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


        // fetches data from database tables and displayes them on the user profile 
        function userdashboard (){
        //query to fetch user with requested email from database 
  
        $userBadges = [];
            $user = Users::where('id','=', session('LoggedUser'))->first();
            $data = ['LoggedUserInfo'=>$user];
            $userbadges = BadgeUser::where('user_id',$user['id'])->get();
        if(!empty($userbadges)) {
            foreach ($userbadges as $userbadge) {
                $userBadges[] = Badges::find($userbadge['badge_id']);
            }
        }

        $LoggedUserInfo = Users::where('id','=', session('LoggedUser'))->first();
        $userTotalDistance = Ride::select('distance')->where('rideleader',$LoggedUserInfo['id'])->sum('distance');
        $userTotalRides = Ride::where('rideleader',$LoggedUserInfo['id'])->count();


        $data = ['LoggedUserInfo'=>$LoggedUserInfo];
       // $userRole = Users::find('role');
        $userRole = Users::find(session('LoggedUser'))->role;
        if($userRole === 'admin'){
           return view('/admin/admindashboard', $data)
           ->with('posts', Posts::all());
        }else{
            return view('/dashboard', $data)
          ->with('training', Training::all())
          ->with('posts', Posts::all())
          ->with('ride', Ride::all()->where('rideleader',$LoggedUserInfo['id']))
          ->with('userBadges', $userBadges)
          ->with('userTotalDistance', $userTotalDistance)
          ->with('userTotalRides', $userTotalRides);
            }
        }

       

        function logout(){
            if(session()->has('LoggedUser')){
                session()->pull('LoggedUser');
                return redirect('/auth/login');
            }
        }

        public function delete($id)
        {
            $user = Users::find($id);
            $user->delete();
            return redirect('/adminuser');
    
        }
  
    }
    
