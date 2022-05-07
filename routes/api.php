<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//medecin en tant que admin 
Route::get('/user/{id}','UserController@show');
Route::get('/user','UserController@index');
Route::get('/create','UserController@create');
Route::get('/edit/{id}','UserController@edit');
Route::post('/store','UserController@store');
Route::patch('/update/{id}','UserController@update');
Route::delete('/delete/{id}','UserController@destroy');


//patient en tant que admin 
Route::get('/patient','CrudPatient@index');
Route::get('/patcreate','CrudPatient@create');
Route::post('/patstore','CrudPatient@store');
Route::get('/patshow/{id}','CrudPatient@show');
Route::get('/patedit/{id}','CrudPatient@edit');
Route::patch('/patiupdate/{id}','CrudPatient@update');
Route::delete('/patdelete/{id}','CrudPatient@destroy');


//assistante en tant que admin 
Route::get('/assistante','CrudAssistante@index');
Route::get('/assicreate','CrudAssistante@create');
Route::post('/assistore','CrudAssistante@store');
Route::get('/assishow/{id}','CrudAssistante@show');
Route::get('/assiedit/{id}','CrudAssistante@edit');
Route::patch('/assiupdate/{id}','CrudAssistante@update');
Route::delete('/assidelete/{id}','CrudAssistante@destroy');


//assistante en tant que medecin
Route::get('/medassistante','CrudassiMedecin@index');
Route::get('/medassicreate','CrudassiMedecin@create');
Route::post('/medassistore','CrudassiMedecin@store');
Route::get('/medassishow/{id}','CrudassiMedecin@show');
Route::get('/medassiedit/{id}','CrudassiMedecin@edit');
Route::patch('/medassiupdate/{id}','CrudassiMedecin@update');
Route::delete('/medassidelete/{id}','CrudassiMedecin@destroy');


//patient en tant que medecin
Route::get('/medpatient','CrudpatiMedecin@index');
Route::get('/medpaticreate','CrudpatiMedecin@create');
Route::post('/medpatistore','CrudpatiMedecin@store');
Route::get('/medpatishow/{id}','CrudpatiMedecin@show');
Route::get('/medpatiedit/{id}','CrudpatiMedecin@edit');
Route::patch('/medpatiupdate/{id}','CrudpatiMedecin@update');
Route::delete('/medpatidelete/{id}','CrudpatiMedecin@destroy');


//patient en tant que assistante
Route::get('/patientassi','CrudassiController@index');
Route::get('/assipaticreate','CrudassiController@create');
Route::post('/assipatistore','CrudassiController@store');
Route::get('/assipatishow/{id}','CrudassiController@show');
Route::get('/assipatiedit/{id}','CrudassiController@edit');
Route::patch('/assipatiupdate/{id}','CrudassiController@update');
Route::delete('/assipatidelete/{id}','CrudassiController@destroy');


//agendas
Route::get('/agendas','AgendaController@index');
Route::get('/ajouter','AgendaController@ajouter');
Route::get('/show/{id}','AgendaController@show');
Route::get('/agendaedit/{id}','AgendaController@edit');
Route::patch('/agendaupdate/{id}','AgendaController@update');
Route::delete('/agendadelete/{id}','AgendaController@destroy');








