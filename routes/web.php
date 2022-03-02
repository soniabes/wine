<?php

use App\Models\Wine;
use App\Models\Country;
use App\Models\Category;
use App\Models\Origin;
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
    return view('welcome');
});

Route::get('/hola/mundo', function () {
    return 'Hola Mundo';
});
/*
Route::get('/wines', function () {
    return Wine::all();
});


Route::get('/wines/{id}', function ($id) {
    return Wine::find($id);
});
*/

Route::get('/wines', function () {
    return Wine::with('countries','categories','origins')->get();
});

/*
Route::get('/wines/{id}', function ($id) {
    return Wine::with('countries')->where('id_country','=',$id)->get();
});
*/

Route::get('/wines/{cellar}', function ($cellar) {
    return Wine::fcellar($cellar)->get();
});

/*
Route::get('/wines/prueba/{vingate}', function ($vingate) {
    return Wine::fvintage($vingate)->get();
});
*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
