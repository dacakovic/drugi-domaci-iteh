<?php

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

Route::get('/', 'PocetnaController@index');

Route::get('/studenti/get', 'StudentController@loadStudente');
Route::get('/student/dugovanja', 'StudentController@prikaziStudenta');

Route::post('/naplate/post', 'NaplataController@dodajNaplatu');
Route::delete('/student/naplata/delete', 'NaplataController@deleteNaplatu');

Route::post('/zaduzivanja/post', 'ZaduzivanjeController@dodajZaduzivanje');
Route::delete('/student/zaduzivanje/delete', 'ZaduzivanjeController@deleteZaduzivanje');
