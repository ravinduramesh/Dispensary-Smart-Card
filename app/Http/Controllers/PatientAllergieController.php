<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Allergie;
use App\PatientAllergie;

use Illuminate\Http\Request;

class PatientAllergieController extends Controller
{

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
