<?php


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


use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/services', [PageController::class, 'services']);
Route::get('/contact', [PageController::class, 'contact']);
Route::post('/contact', [PageController::class, 'store']);
