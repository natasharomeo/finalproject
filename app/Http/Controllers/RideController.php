<?php

namespace App\Http\Controllers;
use App\Models\Badges;
use App\Models\BadgeUser;
use App\Models\Ride;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ride = Ride::all();
        $data = ['LoggedUserInfo'=>Users::where('id','=', session('LoggedUser'))->first()];
        return view('/adminride', $data)
        ->with('ride', Ride::all());

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = Ride::all();
        return view("/addride",compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $rides = new Ride();
        $rides->name = request('name');
        $rides->location = request('location');
        $rides->distance = request('distance');
        $rides->rideleader = request('rideleader');
        $rides->date = request('date');
        $rides->save();

        $user_rides_distance = Ride::select('distance')->where('rideleader',request('rideleader'))->sum('distance');
        $user_badge = 1;

        if($user_rides_distance < 50){
            $user_badge = Badges::select('id')->where('type','Distance')->whereBetween('requirements', [0, 50])->orderBy('requirements','DESC')->first();
        }elseif ($user_rides_distance < 100){
            $user_badge = Badges::select('id')->where('type','Distance')->whereBetween('requirements', [51, 100])->orderBy('requirements','DESC')->first();
        }else{
            $user_badge = Badges::select('id')->where('type','Distance')->whereBetween('requirements', [101, 400])->orderBy('requirements','DESC')->first();
        }

        $checkifBadgeExist = BadgeUser::where('user_id',request('rideleader'))->where('badge_id',$user_badge['id'])->first();
        if(empty($checkifBadgeExist)) {
            $BadgeUser = new \App\Models\BadgeUser();
            $BadgeUser->user_id = request('rideleader');
            $BadgeUser->badge_id = $user_badge['id'];
            $BadgeUser->save();
        }

        return redirect('/adminride');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showData($rides)
    {
        $rides = Ride::find($rides);
        return view('/editride', ['ride' => $rides]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $rides = Ride::find($req->id);
        $rides->name = request('name');
        $rides->location = request('location');
        $rides->distance = request('distance');
        $rides->rideleader = request('rideleader');
        $rides->date = request('date');
        $rides->save();
        return redirect('/adminride');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteride($id)
    {
        $rides = Ride::find($id);
        $rides->delete();
        return redirect('/adminride');
    }
}
