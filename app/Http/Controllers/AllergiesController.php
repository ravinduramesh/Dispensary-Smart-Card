<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Allergie;
use App\PatientAllergie;

use Illuminate\Http\Request;

class AllergiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_allergie()
    {
        $allergies = Allergie::orderBy('id', 'asc')->get();
    	return view('list_allergie', ['allergies'=>$allergies]);
    }

    public function add_allergie()
    {
        return view('add_allergie');
    }
    
    public function insert_allergie(Request $request)
	{
        // allergy	detail
        $this->validate($request, [
            'allergy' => 'required',
			'detail' => 'required',
        ]);
        
        $allergie=Allergie::create([
            'allergy' => $request->allergy,
			'detail' => $request->detail,
        ]);

        return redirect('get_allergie');
	}

	public function edit_allergie($id)
    {
		$allergie=Allergie::where('id',$id)->first();
        return view('edit_allergie', ['allergie'=>$allergie]);
    }

    public function delete_allergie($id)
    {
        $allergie=Allergie::where('id',$id)->delete();
        return redirect('get_allergie');
    }

    public function update_allergie(Request $request, $id)
	{
        $this->validate($request, [
            'allergy' => 'required',
			'detail' => 'required',
		]);
        // allergy detail
        Allergie::find($id)->update([
            'allergy' => $request->allergy,
			'detail' => $request->detail,
        ]);

        return redirect('get_allergie');
    }
    
    /////////////////////////////////////////////////////
    
    public function add_PatientAllergie($id)
    {
        $patient = Patient::where('id',$id)->first();
        $allergies = Allergie::orderBy('id', 'asc')->get();
        return view('add_patientAllergie', ['patient'=>$patient,'allergies'=>$allergies,]);
    }
    
    public function insert_PatientAllergie(Request $request,$id)
	{
        // $this->validate($request, [
		// 	'allergy_id' => 'required',
        // ]);
        // $this->validate($request,[
        //     'id' => 'required',
        // ]);
        // echo($id);

        // echo($request->allergy_id);
        $PatientAllergie=PatientAllergie::create([
            'user_id' => $id,
			'allergy_id' => $request->allergy_id,
        ]);

        return redirect('home');

	}
}
