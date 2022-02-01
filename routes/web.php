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

//Route Nos service
Route::view('nos-services', 'pages.client.nosservice');

//Route notre equipe
Route::view('notre-equipe', 'pages.client.equipe');

// Route  contact
Route::view('contact', 'pages.client.contact');

