<?php

namespace App\Http\Controllers;

use App\Inventorie;
use Illuminate\Http\Request;

class InventoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function get_inventorie()
    {
        $inventories = Inventorie::orderBy('Id', 'asc')->get();
    	return view('list_inventorie', ['inventories'=>$inventories]);
    }

    public function add_inventorie()
    {
        return view('add_invetorie');
    }
    
    public function insert_inventorie(Request $request)
	{
       // Id Name Unit_Price Quantity
        // $this->valIdate($request, [
        //     'Name' => 'required',
        //     'Unit_Price' => 'required',
        //     'Quantity' => 'required',
        // ]);
        
        $inventorie=Inventorie::create([
            'Name' =>  $request->Name,
            'Unit_Price' => $request->Unit_Price,
            'Quantity' =>$request->Quantity,
        ]);

        return redirect('get_inventorie');
	}

	public function edit_inventorie($Id)
    {
		$inventorie=Inventorie::where('Id',$Id)->first();
        return view('edit_inventorie', ['inventorie'=>$inventorie]);
    }

    public function delete_inventorie($Id)
    {
        $inventorie=Inventorie::where('Id',$Id)->delete();
        return redirect('get_inventorie');
    }

    public function update_inventorie(Request $request, $Id)
	{
        $this->valIdate($request, [
            'Name' => 'required',
            'Unit_Price' => 'required',
            'Quantity' => 'required',
		]);
        // allergy detail
        Inventorie::find($Id)->update([
            'Name' =>  $request->Name,
            'Unit_Price' => $request->Unit_Price,
            'Quantity' =>$request->Quantity,
        ]);

        return redirect('get_inventorie');
	}
  
}