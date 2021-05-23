<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function users()
    {
        $users = User::all()->where('user_type','<>',1);
        return view('users',compact('users'));
    }
    public function adduser(Request $request){

        $emailExists = User::where('email', strtolower($request->email) )->first();
        if ($emailExists) {
            $response['message'] = 'Email is already taken.';
            $response['status'] = 'fail';
            return response()->json($response);
        }

        $user = User::create([
            'user_type' => $request['role'],
            'name' => $request['name'],
            'password' => Hash::make($request['password']),
            'email' => strtolower($request['email']) ,
            'city' => $request['city'],
            'country' => $request['country'],
            'phone' => $request['phone'],
            'isActive' => 1,
            'user_image' => 'avatar.jpeg',
        ]);

        if($user){
            return redirect('users')->with('success','New User created successfully');
        }else{
            return redirect('users')->with('fail','Something went wrong, Please try again');
        }
    }
    public function editUser($userId)
    {
        $user = User::find($userId);
        return view('/edituser',compact('user'));
    }
    public function updateUser(Request $request)
    {
//        dd($request);
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->country= $request->country;
        $user->city = $request->city;
        $user->phone= $request->phone;
        $user->user_type= $request->role;
        $user->isActive= $request->isActive;
        $user->save();
        return redirect('/users')->with('success','User updated successfully');
    }

    public function deleteUser($userId)
    {
        $user = User::find($userId);
        $user->delete();
        return redirect('/users')->with('success','User deleted successfully');
    }
}
