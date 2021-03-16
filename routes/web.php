<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\WelcomeController;



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
// Route::get('/individualCategory', [WelcomeController::class, 'individuals'])->name('pastevents');

Route::resource('/dashboard', WorkshopController::class);

Route::resource('/', WelcomeController::class);


// Rutas proyecto Events
// Route::get('/', [IndexController::class, 'index'])->name('index');
// Route::get('/pastevents', [IndexController::class, 'pastEvents'])->name('pastevents');
// Route::get('/event/{id}', [IndexController::class, 'eventDetail'])->name('eventDetail');
