<?php

use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\addEventController;
use App\Http\Controllers\ContenuController;
use App\Http\Controllers\PackctController;
use App\Http\Controllers\SocieteController;
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


Route::get('/test', [App\Http\Controllers\HomeController::class, 'index'])->name('test');

//Route::post('/event/post', [App\Http\Controllers\HomeController::class, 'event'])->name('post.event');

Route::post('/addEvent',[App\Http\Controllers\AddEventController::class, 'addEvent'])->name('addEvent');

Route::get('/congres', [App\Http\Controllers\AddEventController::class, 'dataEvent'])->name('congres');

Route::get('/configevent/{id}',[App\Http\Controllers\AddEventController::class, 'configevent'])->name('congres.configevent');

/* start route userbunde */ 
Route::get('userBundel/usercongres/{id}',[App\Http\Controllers\AddEventController::class, 'usercongres'])->name('userBundel/usercongres');
Route::post('store-usersociete', [App\Http\Controllers\SocieteController::class, 'store_societe']);
Route::get('userBundel/usercongres/{id}', [App\Http\Controllers\SocieteController::class, 'activeuser'])->name('userBundel/usercongres');
Route::post('login-User', [App\Http\Controllers\SocieteController::class, 'loginUser']);
Route::get('userBundel/dashboard/{id}', [App\Http\Controllers\SocieteController::class, 'dashboard'])->name('userBundel/dashboard/{id}');
Route::post('choixsociete', [App\Http\Controllers\SocieteController::class, 'choixsociete']);
// Route::get('userBundel/choixconfirmer/{id}', [App\Http\Controllers\ChoixsocieteController::class, 'showdata'])->name('userBundel/choixconfirmer');
// Route::get('userBundel/choixconfirmer/{id}', [App\Http\Controllers\ChoixsocieteController::class, 'choixconfirmer'])->name('userBundel/choixconfirmer');
Route::get('userBundel/choixconfirmer/{societeId}/{eventId}', [App\Http\Controllers\ChoixsocieteController::class, 'dashboardconfirmer'])->name('userBundel/choixconfirmer');
Route::post('participantInscri', [App\Http\Controllers\ChoixsocieteController::class, 'participantInscri']);

/*---store indive controller route*/
Route::get('userBundel/usercongres/{id}',[App\Http\Controllers\AddEventController::class, 'usercongres'])->name('userBundel/usercongres');
Route::post('store-indiv', [App\Http\Controllers\IndivController::class, 'store_indiv']);
Route::get('userBundel/activeuser/{id}', [App\Http\Controllers\IndivController::class, 'activeindiv'])->name('userBundel/activeuser');
/*---store indive controller route*/
/* start route userbunde */

/* start route contenu */
Route::get('configevent/{eventId}', [App\Http\Controllers\ContenuController::class, 'contenu'])->name('congres.configevent');
Route::post('store-form', [App\Http\Controllers\ContenuController::class, 'store']);
Route::get('/editcontenu/{id}',[App\Http\Controllers\ContenuController::class, 'edit'])->name('editcontenu');
Route::put('/update_contenu/{id}',[App\Http\Controllers\ContenuController::class, 'update_contenu']);
Route::delete('/delete_contenu/{id}',[App\Http\Controllers\ContenuController::class, 'delete'])->name('delete_contenu');
/* end route contenu */

/*Start route pack*/
Route::get('/pack/{eventId}', [App\Http\Controllers\PackctController::class, 'pack'])->name('pack');
Route::post('store-pack', [App\Http\Controllers\PackctController::class, 'store_pack']);
Route::get('/editpack/{id}',[App\Http\Controllers\PackctController::class, 'edit_pack'])->name('editpack');
Route::put('/update_pack/{id}',[App\Http\Controllers\PackctController::class, 'update_pack']);
Route::delete('/delete_pack/{id}',[App\Http\Controllers\PackctController::class, 'delete_pack'])->name('delete_pack');
/**** ----End route pack -----*/

/*------ Start route role -----*/
Route::get('/role/{eventId}', [App\Http\Controllers\RoleController::class, 'rol_congres'])->name('role');
Route::post('store-role', [App\Http\Controllers\RoleController::class, 'store_role']);
Route::get('/editrole/{id}',[App\Http\Controllers\RoleController::class, 'edit_role'])->name('editrole');
Route::put('/update_role/{id}',[App\Http\Controllers\RoleController::class, 'update_role']);
Route::delete('/delete_role/{id}',[App\Http\Controllers\RoleController::class, 'delete_role'])->name('delete_role');
/*--- End route pack ----*/

/*-- Start route hotel ---*/
Route::get('/hotel/{eventId}', [App\Http\Controllers\HotelController::class, 'hotel'])->name('hotel');
Route::post('store-hotel', [App\Http\Controllers\HotelController::class, 'store_hotel']);
/*---- End route hotel ----*/

/*---- Start route possibilite -----*/
Route::get('/possibilite/{eventId}', [App\Http\Controllers\PossibiliteController::class, 'possibilite'])->name('possibilite');
Route::post('store-possibilite', [App\Http\Controllers\PossibiliteController::class, 'store_possibilite']);
/*--- End route possibilite ---*/

/*---------start route sponssoring --*/
Route::get('/sponsor/{eventId}', [App\Http\Controllers\SponsorController::class, 'sponsor'])->name('sponsor');
Route::post('store-sponsor', [App\Http\Controllers\SponsorController::class, 'store_sponsor']);
/*---------End route sponssoring --*/

/*---------start route atelier --*/
Route::get('/atelier/{eventId}', [App\Http\Controllers\AtelierController::class, 'atelier'])->name('atelier');
Route::post('store-atelier', [App\Http\Controllers\AtelierController::class, 'store_atelier']);
/*---------End route atelier --*/

/*---------start route majoration --*/
Route::get('/major/{eventId}', [App\Http\Controllers\MajorController::class, 'major'])->name('major');
Route::post('store-major', [App\Http\Controllers\MajorController::class, 'store_major']);
/*---------End route majoration --*/

/*---------start route hebergementadmin --*/
Route::get('hebergementadmin/{eventId}', [App\Http\Controllers\HebergementController::class, 'index'])->name('hebergementadmin');
Route::post('store', [App\Http\Controllers\HebergementController::class, 'store']);
//Route::get('hebergementadmin/{eventId}', [App\Http\Controllers\HebergementController::class, 'contenuheberg'])->name('hebergementadmin');
/*---------End route hebergementadmin --*/

/*ROUTE PDF DATA */


Route::get('userBundel/dynamic_pdf/{societeId}/{eventId}', [App\Http\Controllers\DynamicPDFController::class, 'index']);

Route::get('userBundel/dynamic_pdf/pdf/{societeId}/{eventId}', [App\Http\Controllers\DynamicPDFController::class, 'pdf']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
