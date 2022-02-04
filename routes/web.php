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



//Details user 
Route::get('detail-equipe/{id}', function($id){
    if ($id == 1) {
       return view('pages.client.det_1');
    }else if($id == 2){
        return view('pages.client.det_2');
    }else if($id == 3){
        return view('pages.client.det_3');
    }else if($id == 4){
        return view('pages.client.det_4');
    }
    else if($id == 5){
        return view('pages.client.det_5');
    }
    else if($id == 6){
        return view('pages.client.det_6');
    }
    else if($id == 7){
        return view('pages.client.det_7');
    } else {
        return redirect()->back();
    }
    
});

