<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Shop\ProductsController;
use App\Http\Controllers\Evenement\EvenementController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Ecole_raseteur\AproposController;
use App\Http\Controllers\Ecole_raseteur\ClassementController;


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

Route::get('/',[HomeController::class,"index"])->name('Home');
Route::get('products',[ProductsController::class,"Products"])->name('Boutique');
Route::get('/product/{id}',[ProductsController::class,"Product"])->name('Product');
Route::get('/category/{id}',[ProductsController::class,"Category"])->name('category');
Route::get('evenement',[EvenementController::class,"Evenement"])->name('Evenement');
Route::get('aPropos',[AproposController::class,"Apropos"])->name('Apropos');
Route::get('classement',[ClassementController::class,"MakeClassement"])->name('Classement');
// Route::get('',[ProductsController::class,"Products"])->name('Boutique');
// Route::get('products',[ProductsController::class,"Products"])->name('Boutique');
// Route::get('products',[ProductsController::class,"Products"])->name('Boutique');
// autre maniere de l'ecrire
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/',function (){
//     return view('home')->with('title',"raseteur-miramas");
//  });
Auth::routes();


