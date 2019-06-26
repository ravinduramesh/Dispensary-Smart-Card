<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use App\Billitem;

class BillController extends Controller
{
    public function get_bills(){
        $bills = Bill::orderBy('id', 'desc')->get();
    	return view('list_bills', ['bills'=>$bills]);
    }

    public function get_single_bill($id){
		$bills = Billitem::where('bill_id', $id)->get();
	    return view('single_bill', ['bills'=>$bills]);
    }

    public function add_bill()
    {
        return view('add_bill');
    }

    public function insert_bill(Request $request)
	{
        $this->validate($request, [
            'first_name' => 'required',
			'last_name' => 'required',
			'address' => 'required',
			'male' => 'required',
			'dob' => 'required',
			'nic' => 'required|unique:patients|min:10',
			'blood_group' => 'required',
			'contact' => 'required',
        ]);
        
        $patient=Patient::create([
            'first_name' => $request->first_name,
			'last_name' => $request->last_name,
			'address' => $request->address,
			'male' => $request->male,
			'dob' => $request->dob,
			'nic' => $request->nic,
			'blood_group' => $request->blood_group,
			'contact' => $request->contact
        ]);

        return redirect('home');
	}

	public function edit_bill($id)
    {
		$bill = Bill::where('id',$id)->first();
        return view('edit_bill', ['bill'=>$bill]);
    }

    public function update_patient(Request $request, $id)
	{
        $this->validate($request, [
            'first_name' => 'required',
			'last_name' => 'required',
			'address' => 'required',
			'male' => 'required',
			'dob' => 'required',
			'nic' => 'required|min:10',
			'blood_group' => 'required',
			'contact' => 'required',
		]);
        
        Patient::find($id)->update([
            'first_name' => $request->first_name,
			'last_name' => $request->last_name,
			'address' => $request->address,
			'male' => $request->male,
			'dob' => $request->dob,
			'nic' => $request->nic,
			'blood_group' => $request->blood_group,
			'contact' => $request->contact
        ]);

        return redirect('home');
	}
}
