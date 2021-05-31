<?php

namespace App\Http\Controllers;
use App\Models\Training;
use App\Models\Users;
use Illuminate\Http\Request;


class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $training = Training::all();
        $data = ['LoggedUserInfo'=>Users::where('id','=', session('LoggedUser'))->first()];
        return view('/admintraining', $data)
        ->with('training', Training::all());
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("/addtraining");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $trainings = new Training();
        $trainings->name = request('name');
        $trainings->location = request('location');
        $trainings->rideleader = request('rideleader');
        $trainings->date = request('date');
        $trainings->save();
        return redirect('/admintraining');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showData($id)
    {
        $trainings = Training::find($id);
        return view('/training', ['training' => $id]);
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
        $trainings = Training::find($req->id);
        $trainings->name = request('name');
        $trainings->location = request('location');
        $trainings->rideleader = request('rideleader');
        $trainings->date = request('date');
        $trainings->save();
        return redirect('/admintraining');
    }
    
    function deletetraining($id)
    {
        $trainings = Training::find($id);
        $trainings->delete();
        return redirect('/admintraining');
    }

}