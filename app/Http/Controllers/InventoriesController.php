<?php

namespace App\Http\Controllers;
use App\inventorie;
use Illuminate\Http\Request;

class InventoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $inventories = inventories_model::all();
        return view('inventories.inventories_views');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Name	Unit_Price	Quantity


        //  $request->validate([
        //     'Name'=> 'required',
        //     'Unit_Price'=>'required',
        //     'Quantity'=> 'required'
        //   ]);

        $inventories = inventorie::create([
            'Name'=> $request->Name,
            'Unit_Price'=> $request->Unit_Price,
            'Quantity' => $request->Quantity
          ]);
          return redirect('/inventories')->with('success', 'Inventory has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\inventories_model  $inventories_model
     * @return \Illuminate\Http\Response
     */
    public function show(inventorie $inventorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\inventories_model  $inventories_model
     * @return \Illuminate\Http\Response
     */
    public function edit(inventorie $inventorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\inventories_model  $inventories_model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inventorie $inventorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\inventories_model  $inventories_model
     * @return \Illuminate\Http\Response
     */
    public function destroy(inventorie $inventorie)
    {
        //
    }
}
