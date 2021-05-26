<?php

namespace App\Http\Controllers;
use App\Models\Ride;
use Illuminate\Http\Request;

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
        return view('/adminride', compact('ride'));
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
    public function showData($id)
    {
        $rides = Rides::find($id);
        return view('/editrides', ['ride' => $rides]);
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
        $rides = Rides::find($req->id);
        $rides->name = request('name');
        $rides->location = request('location');
        $rides->distnce = request('distance');
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
    public function delete($id)
    {
        $rides = Rides::find($id);
        $rides->delete();
        return redirect('/adminrides');
    }
}
