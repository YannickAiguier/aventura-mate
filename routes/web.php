<?php


use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
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
// route vers l'affichage de la page d'accueil, URI = /
Route::get('/', [HomeController::class, 'HomeShowcontroller'])->name('home');

// route vers l'affichage de la page produit unitaire, URI = /product/{id}
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product');

// route vers l'affichage du catalogue, URI = /catalog
Route::get('/catalog', [ProductController::class, 'index'])->name('catalog');

// route vers l'affichage du catalogue par catégorie, URI = /catalog/{id}
Route::get('/catalog/{categoryId}', [ProductController::class, 'indexByCategory'])->name('catalogByCategory');

// route vers l'affichage du panier, URI = /cart
Route::get('/cart', [CartController::class, 'index'])->name('indexCart');

// route vers l'ajout au panier, URI = /cart
Route::post('cart', [CartController::class, 'store'])->name('storeCart');

// route vers la modification du panier, URI = /cart
Route::put('/cart', [CartController::class, 'update'])->name('updateCart');

Route::put('/cart/{id}', [CartController::class, 'lineUpdate'])->name('lineUpdate');

// route vers la suppresion d'un produit du panier, URI = /cart
Route::delete('cart/{id}', [CartController::class, 'destroy'])->name('destroyCart');
