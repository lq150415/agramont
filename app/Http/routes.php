<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

Route::group(['middleware' => 'auth'], function () {
Route::get('/',['as'=>'/','uses'=>'ClientesController@index']);
Route::get('pacientesagramont',['as'=>'pacientesagramont','uses'=>'PacientesController@index']);
Route::get('pacientesdarsalud','ClientesController@index3');
Route::get('facturacion','ClientesController@factura');
Route::post('registrarpacientes','PacientesController@store');
Route::get('farmacia',['as'=>'farmacia','uses'=>'ClientesController@farmacia']);
Route::get('reservas',['as'=>'reservas','uses'=>'ClientesController@reservas']);
Route::post('consultoriosmed','PacientesController@consultasmed');
Route::post('consultoriospac','PacientesController@consultaspac');
Route::post('registroticket','PacientesController@ticket');
Route::post('modificarticket','PacientesController@mticket');
Route::post('reservaticket','PacientesController@reservaticket');
Route::post('registrarproducto','PacientesController@producto');
Route::post('reservar','PacientesController@reservar');
Route::post('atencion','PacientesController@atencion');
Route::post('ausente','PacientesController@ausente');
Route::get('{id}/evaluacionpsicologica/{ids}','PacientesController@psicologica');
Route::get('{id}/evaluacionmedica/{ids}','PacientesController@medica');
Route::get('{id}/evaluacionoftalmologica/{ids}','PacientesController@oftalmo');
Route::get('{id}/evaluacionotorrinolaringologica/{ids}','PacientesController@otorrino');
Route::get('{id}/evaluacionpsicologica/{ids}/finalizar','PacientesController@finalizar');
Route::get('{id}/evaluacionotorrinolaringologica/{ids}/finalizar','PacientesController@finalizar');
Route::get('pacientes/{id}','PacientesController@historial');
Route::post('modificarpacientes','PacientesController@modificar');
Route::post('pacientes/{id}/pdfreceta','EvaluacionesController@pdfreceta');

Route::get('pacientes/{id}/recetas','PacientesController@recetas');
Route::get('{id}/evaluacionmedica/{ids}/finalizar','PacientesController@finalizar');
Route::post('{id}/evaluacionpsicologica/{ids}/pdfpsico','EvaluacionesController@pdfpsico');
Route::post('{id}/evaluacionoftalmologica/{ids}/pdfoftalmo','EvaluacionesController@pdfoftalmo');
Route::get('{id}/evaluacionoftalmologica/{ids}/finalizar','PacientesController@finalizar');
Route::post('{id}/evaluacionmedica/{ids}/pdfmedi','EvaluacionesController@pdfmedi');
Route::post('{id}/evaluacionotorrinolaringologica/{ids}/pdfotorrino','EvaluacionesController@pdfotorrino');
Route::get('pacientes','PacientesController@listapacientes');
Route::get('pendientes','PacientesController@listapendientes');
});
Route::post('medicos','PacientesController@medicosact');
Route::post('medicos2','PacientesController@medicosact2');
Route::post('/{id}/{ev}/datospac','PacientesController@datospac');
Route::get('export','ExcelController@actionIndex');
Route::get('/pacientes/{id}/histmedica/{ids}','EvaluacionesController@pdfhistmedi');