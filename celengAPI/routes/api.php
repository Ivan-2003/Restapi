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

Route::prefix('data_karyawan')->group(function(){
    Route::get('divisi', 'DivisiController@index');
    Route::post('divisi', 'DivisiController@create');
    Route::put('divisi/{id}', 'DivisiController@update');
    Route::delete('divisi/{id}', 'DivisiController@delete');

    Route::get('jabatan', 'JabatanController@index');
    Route::post('jabatan', 'JabatanController@create');
    Route::put('jabatan/{id}', 'JabatanController@update');
    Route::delete('jabatan/{id}', 'JabatanController@delete');

    Route::get('status', 'StatusController@index');
    Route::post('status', 'StatusController@create');
    Route::put('status/{id}', 'StatusController@update');
    Route::delete('status/{id}', 'StatusController@delete');

    Route::get('karyawan', 'KaryawanController@index');
    Route::post('karyawan', 'KaryawanController@create');
    Route::put('karyawan/{id}', 'KaryawanController@update');
    Route::delete('karyawan/{id}', 'KaryawanController@delete');
});
