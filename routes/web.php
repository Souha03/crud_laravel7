<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssistanteController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\PatientController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// Route::get('/admin', 'HomeController@adminHome')->name('index');

Route::get('/admin','AdminController@index')->name('admin')->middleware('admin');
Route::get('/patients','PatientController@index')->name('patients.index');
Route::get('/medecin','MedecinController@index')->name('medecin')->middleware('medecin');
// Route::get('/assistante','AssistanteController@index')->name('assistante')->middleware('assistante');
Route::get('/assistantes','AssistanteController@index')->name('assistantes')->middleware('assistantes');

Route::get('/home', 'HomeController@index')->name('home');


//crud a
Route::resource('users','UserController');
Route::resource('assistante','CrudAssistante');
Route::resource('patient','CrudPatient');
Route::resource('crudassistante','CrudassiController');
Route::resource('assistantecrud','CrudassiMedecin');
Route::resource('patientcrud','CrudpatiMedecin');


Route::get('/admin', 'AdminController@index')->name('admin.index');

#crud assistante 

Route::get('/assistantes', 'AssistanteController@index')->name('assistantes.index');
Route::get('/users/edit/{users}', 'UserController@edit')->name('users.edit');
Route::get('/crudassistante', 'CrudassiController@index')->name('crudassistante.index');
Route::get('/crudassistante/{crudassistante}', 'CrudassiController@edit')->name('crudassistante.edit');
Route::PATCH('/update', 'CrudassiController@update')->name('crudassistante.update');

#crud medecin 
Route::get('/medecin', 'MedecinController@index')->name('medecin.index');

  ## Update_assistante
Route::get('/assistantecrud/store/{assistante}', 'CrudassiMedecin@edit')->name('assistantecrud.edit');
Route::PATCH('/assistantecrud/update/{assistante}', 'CrudassiMedecin@update')->name('assistantecrud.update');

  ## Update_patient
Route::get('/patientcrud/store/{patient}', 'CrudpatiMedecin@edit')->name('patientcrud.edit');
Route::PATCH('/patientcrud/update/{patient}', 'CrudpatiMedecin@update')->name('patientcrud.update');
## Update_login assistante
Route::get('/crudassistante/store/{patient}', 'CrudassiController@edit')->name('crudassistante.edit');
Route::PATCH('/crudassistante/update/{patient}', 'CrudpatiMedecin@update')->name('crudassistante.update');

## Delete
Route::delete('/patientcrud/delete/{patient}', 'CrudpatiMedecin@destroy')->name('patientcrud.destroy');
Route::delete('/assistantecrud/delete/{assistante}', 'CrudassiMedecin@destroy')->name('assistantecrud.destroy');
Route::delete('/crudassistante/delete/{patient}', 'CrudassiController@destroy')->name('crudassistante.destroy');
##show
Route::get('/assistantecrud/show/{assistante}', 'CrudassiMedecin@show')->name('assistantecrud.show');
Route::get('/patientcrud/show/{patient}', 'CrudpatiMedecin@show')->name('patientcrud.show'); 
Route::get('/crudassistante/show/{patient}', 'CrudassiController@show')->name('crudassistante.show'); 





//**********Agenda*******/
Route::get('/index', 'AgendaController@index');
Route::post('/index/ajouter', 'AgendaController@ajouter');
// Route::get('/index/listar', 'AgendaController@listar');
Route::post('/mod/{id}', 'AgendaController@mod');
Route::get('/show/{id}', 'AgendaController@show');
Route::delete('/delete/{id}', 'AgendaController@delete');
Route::get('/agenda_edit/{id}','AgendaController@agenda_edit')->name('edit.get');
Route::post('/modifier_agenda/{id}', 'AgendaController@modifier_agenda');
Route::get('/fetch', 'AgendaController@fetch');
Route::get('/show_data/{id}', 'AgendaController@show_data');

Route::post('/index/delete', 'AgendaController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



 


















