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

Route::get('/get_allergie', 'AllergiesController@get_allergie')->middleware('auth');
Route::get('/add_allergie', 'AllergiesController@add_allergie')->middleware('auth');
Route::post('/insert_allergie', 'AllergiesController@insert_allergie')->middleware('auth');
Route::get('/edit_allergie/{id}', 'AllergiesController@edit_allergie')->middleware('auth');
Route::post('/update_allergie/{id}', 'AllergiesController@update_allergie')->middleware('auth');
Route::post('/delete_allergie/{id}', 'AllergiesController@delete_allergie')->middleware('auth');