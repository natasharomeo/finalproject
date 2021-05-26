<?php

namespace App\Http\Controllers;
use App\Models\Training;
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
        return view('/admintraining', compact('training'));
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
        $trainings = Trainings::find($id);
        return view('/edittraining', ['training' => $trainings]);
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
        $trainings = Trainings::find($req->id);
        $trainings->name = request('name');
        $trainings->location = request('location');
        $trainings->rideleader = request('rideleader');
        $trainings->date = request('date');
        $trainings->save();
        return redirect('/admintraining');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $trainings = Trainings::find($id);
        $trainings->delete();
        return redirect('/admintrainings');
    }
}
