<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopController;

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

//no se encuentra en la developmment
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [WelcomeController::class, 'index']);
// Route::get('/individualCategory', [WelcomeController::class, 'individuals'])->name('pastevents');


Route::resource('/dashboard', WorkshopController::class);

// Rutas proyecto Events
// Route::get('/', [IndexController::class, 'index'])->name('index');
// Route::get('/pastevents', [IndexController::class, 'pastEvents'])->name('pastevents');
// Route::get('/event/{id}', [IndexController::class, 'eventDetail'])->name('eventDetail');
