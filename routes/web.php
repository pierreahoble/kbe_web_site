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
    return view('pages.client.index');
});

//
Route::view('apropos','pages.client.apropos');

//Route Nos Ingenerie financier
Route::view('ingenerie-financiere', 'pages.client.nosservice');

//Route Optimisation fiscale
Route::view('optimisation-fiscale','pages.client.optimisation');

//Route Gestion digitale
Route::view('gestion-digitale', 'pages.client.digitale');

//Route gestion immobiliere
Route::view('gestion-immobiliere', 'pages.client.immobiliere');


Route::view('prendre-un-rendez-vous', 'pages.client.devis');


//Route notre equipe
Route::view('notre-equipe', 'pages.client.equipe');

// Route  contact
Route::view('contact', 'pages.client.contact');

