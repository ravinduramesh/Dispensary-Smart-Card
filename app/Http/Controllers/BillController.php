<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Bill;
use App\Prescription;
use App\Prescriptionitem;
use App\Billitem;
use App\Inventories;

class BillController extends Controller
{
    public function get_bills(){
        $bills = Bill::orderBy('id', 'desc')->get();
    	return view('list_bills', ['bills'=>$bills]);
    }

    public function get_single_bill($id){
		$bills = DB::table('Billitems')
		->select('Billitems.*','Inventories.name AS name', 'Inventories.unit_price', 'Bills.customer_id')
		->join('Inventories','Inventories.id','=','Billitems.item_id')
		->join('Bills','Bills.id','=','Billitems.bill_id')
		->where(['bill_id' => $id])
		->get();
	    return view('single_bill', ['bills'=>$bills]);
    }

	public function search_Prescription($p_id){

		$pats = DB::table('Prescriptions')
		->select('Prescriptions.id')
		->where(['Prescriptions.patient_id' => $p_id])
		->get();


		foreach($pats as $pat){
			$id = $pat->id;
		}

		$bills = DB::table('Prescriptionitems')
		->select('Prescriptionitems.*','Inventories.name', 'Inventories.unit_price', 'Prescriptionitems.quantity', 'Prescriptions.patient_id')
		->join('Inventories','Inventories.id','=','Prescriptionitems.item_id')
		->join('Prescriptions','Prescriptions.id','=','Prescriptionitems.Prescription_id')
		->where(['Prescriptionitems.prescription_id' => $id])
		->get();

		$u=0;
		$q=0;
		$t=0;
		$total=0;
		foreach($bills as $bill){
			echo $bill->name;
			$u = $bill->unit_price;
			$q = $bill->quantity;
			$t = $u*$q;
			echo $t;
			$total = $total + $t;
			echo "<br>";
		}
		echo $total;

		echo "<br>";

		$bill=Bill::create([
			'customer_id' => $bill->patient_id,
			'total_price' => $total
        ]);

		$billids = DB::table('Bills')
		->select('Bills.id')
		->get();

		foreach($billids as $billid){}
		echo $billid->id;		

		foreach($bills as $bill){
			$u = $bill->unit_price;
			$q = $bill->quantity;
			$t = $u*$q;

			$bill=Billitem::create([
				'bill_id' => $billid->id,
				'item_id' => $bill->item_id,
				'quantity' => $bill->quantity,
				'price' => $t,
			]);

			$items = DB::table('Inventories')
			->select('Inventories.quantity')
			->where(['Inventories.id' => $bill->item_id])
			->get();

			foreach($items as $item)
			$rem_qty = $item->quantity - $bill->quantity;
			
			$bill_id = $bill->item_id;

			DB::table('Inventories')
			->where('id', $bill_id)
			->update(['quantity' => $rem_qty]);
		}

	    return view('bill_prescription', ['bills'=>$bills]);

	}

	public function edit_bill($id){

		$bills = DB::table('Bills')
		->select('Bills.*','Billitems.*')
		->join('Billitems','Billitems.bill_id','=','Bills.id')
		->where(['id' => $id])
		->get();

        return view('edit_bill', ['bills'=>$bills]);
    }

    public function update_patient(Request $request, $id){
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
	
    public function delete_bill($id){
		DB::table('Bills')->where('id', $id)->delete();
		DB::table('Billitems')->where('bill_id', $id)->delete();

        return redirect('bill_list');
    }
}
