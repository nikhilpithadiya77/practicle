<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientcontroller;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::view('practicle','practicle');
// Route::resources(['/demo' => clientcontroller::class]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test', [App\Http\Controllers\clientcontroller::class, 'index'])->name('test');

Route::post('/add-data', [App\Http\Controllers\clientcontroller::class, 'store'])->name('add-data');
Route::post('/add-vehicle', [App\Http\Controllers\admincontroller::class, 'addvehicle']);

Route::post('/show-vehicle', [App\Http\Controllers\clientcontroller::class, 'getall']);
