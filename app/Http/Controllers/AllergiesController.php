<?php

namespace App\Http\Controllers;

use App\allergie;
use Illuminate\Http\Request;

class AllergiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $allergies = allergies_controller::all();
        // return view('allergies.allergies_view', compact('allergies'));
        return view('allergies.allergies_view');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('allergies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'allergy'=>'required',
            'detail'=> 'required',
          ]);
          $allergy = new Allergy([
            'allergy'=> $request->get('allergy'),
            'detail'=> $request->get('detail')
          ]);
          $allergy->save();
          return redirect('/allergies')->with('success', 'Allergy has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\allergies_model  $allergies_model
     * @return \Illuminate\Http\Response
     */
    public function show(allergies_model $allergies_model)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\allergies_model  $allergies_model
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $allergies = allergies_controller::find($id);;
        return view('allergies.update', compact('allergies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\allergies_model  $allergies_model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, allergies_model $allergies_model)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\allergies_model  $allergies_model
     * @return \Illuminate\Http\Response
     */
    public function destroy(allergies_model $allergies_model)
    {
        //
    }
}
