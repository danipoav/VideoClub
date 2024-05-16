<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
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

/* Rutes principals separades
Route::get('/', function () {
    return view('home');
});

Route::get('catalog', function () {
    return view('catalog/index');
});

Route::get('catalog/show/{id}', function ($id) {
    return view('catalog/show', compact('id'));
});

Route::get('catalog/create', function () {
    return view('catalog/create');
});

Route::get('catalog/edit/{id}', function ($id) {
    return view('catalog/edit', compact('id'));
});
*/

//rutes agrupades per controladors

Route::get('/', [HomeController::class, 'home']);

Route::controller(CatalogController::class)->group(function () {
    Route::get('catalog', 'index');
    Route::get('catalog/show/{id}', 'show');
    Route::get('catalog/create', 'create');
    Route::get('catalog/edit/{id}', 'edit');
});

Route::post("catalog/create", [CatalogController::class, 'postCreate']);

Route::put('catalog/edit/{id}', [CatalogController::class, 'postEdit']);
