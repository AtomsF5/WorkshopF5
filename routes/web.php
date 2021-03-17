<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopController;
use App\Models\Student;

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

Route::resource('/dashboard', WorkshopController::class);


Route::get('/', [WelcomeController::class, 'index']);

Route::post('/enrolls/{workshopId}', [StudentController::class, 'enroll'])->name('enroll');

