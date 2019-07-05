<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Prescription;
use App\Prescriptionitem;

class PrescriptionController extends Controller
{
    public function get_prescriptions()
    {
        $prescriptions = Prescription::orderBy('created_at', 'desc')->get();
    	return view('list_prescriptions', ['prescriptions'=>$prescriptions]);
    }

    public function add_prescription()
    {
        return view('add_prescription');
    }

    public function insert_prescription(Request $request)
	{

        $this->validate($request, [
            'doctor_id' => 'required',
			'patient_id' => 'required',
			'description' => 'required'
        ]);
        
        $prescription=Prescription::create([
            'doctor_id' => $request->doctor_id,
			'patient_id' => $request->patient_id,
			'description' => $request->description
        ]);

        return redirect('prescription_list');
    }
    
    public function delete_prescription($id){
		DB::table('Prescriptions')->where('id', $id)->delete();
		DB::table('Prescriptionitems')->where('prescription_id', $id)->delete();

        return redirect('prescription_list');
    }

	// public function edit_prescription($id)
    // {
	// 	$prescription = Prescription::where('id',$id)->first();
    //     return view('edit_prescription', ['prescription'=>$prescription]);
    // }

    // public function update_prescription(Request $request, $id)
	// {
    //     $this->validate($request, [
    //         'first_name' => 'required',
	// 		'last_name' => 'required',
	// 		'address' => 'required',
	// 		'male' => 'required',
	// 		'dob' => 'required',
	// 		'nic' => 'required|min:10',
	// 		'blood_group' => 'required',
	// 		'contact' => 'required',
	// 	]);
        
    //     Prescription::find($id)->update([
    //         'first_name' => $request->first_name,
	// 		'last_name' => $request->last_name,
	// 		'address' => $request->address,
	// 		'male' => $request->male,
	// 		'dob' => $request->dob,
	// 		'nic' => $request->nic,
	// 		'blood_group' => $request->blood_group,
	// 		'contact' => $request->contact
    //     ]);

    //     return redirect('home');
	// }
}
