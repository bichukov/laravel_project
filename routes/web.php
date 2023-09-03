<?php
use  App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [MainController::class, 'Sliders'])->name('main');
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');
Route::get('/delivery', [MainController::class, 'delivery'])->name('delivery');
Route::get('/aboutcompany', [MainController::class, 'aboutcompany'])->name('aboutcompany');
