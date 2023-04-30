<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// route du site internet
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/detail-produit/{id}', [HomeController::class, 'detailProduit'])->name('detailProduit');
Route::get('/produits-en-solde', [HomeController::class, 'productsSolde'])->name('productsSolde');
Route::get('/produits-femmes', [HomeController::class, 'productsFemmes'])->name('productsFemmes');
Route::get('/produits-hommes', [HomeController::class, 'productsHommes'])->name('productsHommes');


// route espace admin
Route::get('/admin', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');
Route::get('/logout', [LogoutController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');
Route::resource("categories", CategoryController::class);
Route::resource("products", ProductController::class);

