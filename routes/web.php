<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopController;
use App\Http\Livewire\WorkshopForm;
use App\Http\Controllers\ValidationController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['admin'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('workshops', WorkshopController::class);

Route::get('dashboard/workshop', [WorkshopController::class, 'create'])->name('dashboard')->middleware('admin');

Route::get('dashboard/workshop/createworkshop', [WorkshopForm::class, 'render'])->name('workshopform')->middleware('admin');

Route::post('inscription/users/postvalidation', [ValidationController::class,'store']);
