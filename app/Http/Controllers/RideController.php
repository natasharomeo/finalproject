<?php

namespace App\Http\Controllers;
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
        return view("/addride");
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
