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
Route::get('/home', 'HomeController@index')->middleware('auth');

Route::get('/list_patients', 'PatientController@get_patients')->middleware('auth','doctor');
Route::get('/add_patient', 'PatientController@add_patient')->middleware('auth','doctor');
Route::post('/insert_patient', 'PatientController@insert_patient')->middleware('auth','doctor');
Route::get('/print_smart_card/{id}', 'PatientController@print_smart_card')->middleware('auth','doctor');
Route::get('/edit_patient/{id}', 'PatientController@edit_patient')->middleware('auth','doctor');
Route::post('/update_patient/{id}', 'PatientController@update_patient')->middleware('auth','doctor');
Route::get('/delete_patient/{id}', 'PatientController@delete_patient')->middleware('auth','doctor');

Route::get('/manage_users', 'UserController@manage_users')->middleware('auth','admin');
Route::post('/insert_user', 'UserController@insert_user')->middleware('auth','admin');
Route::get('/delete_user/{id}', 'UserController@delete_user')->middleware('auth','admin');

// Isuru
Route::get('/get_allergie', 'AllergiesController@get_allergie')->middleware('auth','doctor');
Route::get('/add_allergie', 'AllergiesController@add_allergie')->middleware('auth','doctor');
Route::post('/insert_allergie', 'AllergiesController@insert_allergie')->middleware('auth','doctor');
Route::get('/edit_allergie/{id}', 'AllergiesController@edit_allergie')->middleware('auth','doctor');
Route::post('/update_allergie/{id}', 'AllergiesController@update_allergie')->middleware('auth','doctor');
Route::get('/delete_allergie/{id}', 'AllergiesController@delete_allergie')->middleware('auth','doctor');

// Lamudu
Route::get('/get_inventorie', 'inventoriesController@get_inventorie')->middleware('auth');
Route::get('/add_inventorie', 'inventoriesController@add_inventorie')->middleware('auth');
Route::post('/insert_inventorie', 'inventoriesController@insert_inventorie')->middleware('auth');
Route::get('/edit_inventorie/{id}', 'inventoriesController@edit_inventorie')->middleware('auth');
Route::post('/update_inventorie/{id}', 'inventoriesController@update_inventorie')->middleware('auth');
Route::get('/delete_inventorie/{id}', 'inventoriesController@delete_inventorie')->middleware('auth');