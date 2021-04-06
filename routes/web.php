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

Route::get('/', function () {
    return view('home');
});
Route::get('/urlRes','App\Http\Controllers\RespondentsController@create ');
Route::post('/urlRes','App\Http\Controllers\RespondentsController@Save ');

Route::get('/index','App\Http\Controllers\MonController@acceuil');

Route::get('/questionnaire','App\Http\Controllers\MonController@remplirFormulaire');

Route::get('/inscription','App\Http\Controllers\MonController@inscrire');
Route::post('/inscription', function (){
    return request('nomRes');
});



