<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class PatientController extends Controller
{
    public function get_patients()
    {
        $patients = Patient::orderBy('created_at', 'desc')->get();
    	return view('list_patients', ['patients'=>$patients]);
    }

    public function add_patient()
    {
        return view('add_patient');
    }

    public function insert_patient(Request $request)
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

        return redirect('list_patients');
	}

	public function edit_patient($id)
    {
		$patient = Patient::where('id',$id)->first();
        return view('edit_patient', ['patient'=>$patient]);
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

        return redirect('list_patients');
	}

	public function delete_patient($id)
	{
		Patient::find($id)->delete();
		return redirect('list_patients');
	}

	public function print_smart_card($id)
	{
		$patient = Patient::where('id',$id)->first();
		return view('print_smart_card', ['patient'=>$patient]);
	}
}
