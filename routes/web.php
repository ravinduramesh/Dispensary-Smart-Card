<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/home', 'PatientController@get_patients')->middleware('auth');
Route::get('/add_patient', 'PatientController@add_patient')->middleware('auth');
Route::post('/insert_patient', 'PatientController@insert_patient')->middleware('auth');
Route::get('/edit_patient/{id}', 'PatientController@edit_patient')->middleware('auth');
Route::post('/update_patient/{id}', 'PatientController@update_patient')->middleware('auth');

Route::get('/bill_list', 'BillController@get_bills')->middleware('auth');
Route::get('/single_bill/{id}', 'BillController@get_single_bill')->middleware('auth');
Route::get('/add_bill', 'BillController@add_bill')->middleware('auth');
Route::get('/search_Prescription/{id}', 'BillController@search_Prescription')->middleware('auth');
Route::get('/delete_bill/{id}', 'BillController@delete_bill')->middleware('auth');

// Route::post('/insert_bill', 'BillController@bill_patient')->middleware('auth');
// Route::get('/edit_bill/{id}', 'BillController@edit_bill')->middleware('auth');
// Route::get('/add_prescription_bill', 'BillController@add_prescription_bill')->middleware('auth');
// Route::get('/search_Prescription/{id}', 'BillController@search_Prescription')->middleware('auth');
// Route::get('/bill_prescription', 'BillController@search_Prescription')->middleware('auth');


Route::get('/prescription_list', 'PrescriptionController@get_prescriptions')->middleware('auth');
Route::get('/add_prescription', 'PrescriptionController@add_prescription')->middleware('auth');
Route::get('/insert_prescription', 'PrescriptionController@insert_prescription')->middleware('auth');
Route::get('/delete_prescription/{id}', 'PrescriptionController@delete_prescription')->middleware('auth');


// Route::post('/update_patient/{id}', 'PatientController@update_patient')->middleware('auth');