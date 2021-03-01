<?php
use App\Http\Controllers\LibroController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\ClasificacionController;


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
Route::get('menu', function () {
    return view('layout.master');
});
Route::resource('libro', 'App\Http\Controllers\LibroController');
Route::resource('editorial', 'App\Http\Controllers\EditorialController');
Route::resource('clasificacion', 'App\Http\Controllers\ClasificacionController');

/*
Route::resource('libro', [LibroController::class]);
Route::resource('editorial', [EditorialController::class]);
Route::resource('clasificacion', [ClasificacionController::class]);
*/