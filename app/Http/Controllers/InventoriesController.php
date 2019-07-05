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


    public function get_inventorie()
    {
        $inventories = inventorie::orderBy('Id', 'asc')->get();
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
        // return response()->json($request);
        
        $inventorie=inventorie::create([
            'Name' =>  $request->Name,
            'Unit_Price' => $request->Unit_Price,
            'Quantity' =>$request->Quantity,
        ]);

        return redirect('get_inventorie');
	}

	public function edit_inventorie($Id)
    {
		$inventorie=inventorie::where('Id',$Id)->first();
        return view('edit_inventorie', ['inventorie'=>$inventorie]);
    }

    public function delete_inventorie($Id)
    {
        $inventorie=inventorie::where('Id',$Id)->delete();
        return redirect('get_inventorie');
    }

    public function update_inventorie(Request $request, $id)
	{
        $this->validate($request, [
            'Name' => 'required',
            'Unit_Price' => 'required',
            'Quantity' => 'required',
        ]);
        inventorie::where('id',$id)->update([
            'Name' =>  $request->Name,
            'Unit_Price' => $request->Unit_Price,
            'Quantity' => $request->Quantity,
        ]);
        return redirect('get_inventorie');
	}
  
}
