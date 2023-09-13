<?php
use  App\Http\Controllers\MainController;
use  App\Http\Controllers\Postcontroller;
use  App\Http\Controllers\SectionsController;
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
Route::post('/', [Postcontroller::class, 'submit'])->name('submit');


Route::group(['prefix' => '/decorations', 'controller' => SectionsController::class], function () {
    Route::get('/', 'decorations')->name('decorations');
    Route::get('/{path}', 'decor_path')->name('decorations1');
    Route::get('/{path}/{id}', 'product_path')->name('decorations2');
});


Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');
Route::post('/contacts', [MainController::class, 'contacts_post'])->name('contacts-post');

Route::get('/delivery', [MainController::class, 'delivery'])->name('delivery');
Route::post('/delivery', [MainController::class, 'delivery_post'])->name('delivery-post');
Route::get('/aboutcompany', [MainController::class, 'aboutcompany'])->name('aboutcompany');
Route::post('/aboutcompany', [MainController::class, 'aboutcompany_post'])->name('aboutcompany-post');



