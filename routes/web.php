<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Shop\ProductsController;
use App\Http\Controllers\Evenement\EvenementController;
use App\Http\Controllers\HomeController;


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

// Ecriture conventionnel avec controller

Route::get('home',[HomeController::class,"Home"])->name('Home');
Route::get('ecole',[EcoleController::class,"Ecole"])->name('Ecole');
Route::get('products',[ProductsController::class,"Products"])->name('Boutique');
Route::get('evenement',[EvenementController::class,"Evenement"])->name('Evenement');
// Route::get('',[ProductsController::class,"Products"])->name('Boutique');
// Route::get('products',[ProductsController::class,"Products"])->name('Boutique');
// Route::get('products',[ProductsController::class,"Products"])->name('Boutique');
// autre maniere de l'ecrire
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/',function (){
//     return view('home')->with('title',"raseteur-miramas");
//  });
Auth::routes();


