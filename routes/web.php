<?php

use App\Http\Controllers\CartController;
use  App\Http\Controllers\MainController;
use App\Http\Controllers\OrderController;
use  App\Http\Controllers\Postcontroller;
use  App\Http\Controllers\SectionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserInformationController;
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


Route::get('/', [MainController::class, 'sliders'])->name('main');
Route::post('/', [Postcontroller::class, 'submit'])->name('submit');


Route::group(['prefix' => '/decorations', 'controller' => SectionController::class], function () {
    Route::get('/', 'decorations')->name('decorations');
    Route::get('/{path}', 'decor_path')->name('decorations1');
    Route::get('/{path}/{id}', 'product_path')->name('decorations2');
});

Route::group(['controller' => UserController::class], function () {
    Route::get('/login', 'getLoginPage')->name('getLoginPage');
    Route::post('/login', 'login')->name('login');
    Route::get('/register', 'getRegisterPage')->name('getRegisterPage');
    Route::post('/register', 'register')->name('register');
    Route::get('/logout', 'logout')->name('auth.logout');

});

Route::group(['prefix' => '/account', 'controller' => UserInformationController::class], function () {
    Route::get('/', 'account')->name('account.show');
    Route::post('/', 'updateAccount')->name('account.update');
});
Route::group(['prefix' => '/cart', 'controller' => CartController::class], function () {
    Route::get('/', 'getCart')->name('cart.get');
    Route::post('/{product}/add', 'add')->name('cart.add');
    Route::post('/{product}/remove', 'remove')->name('cart.remove');
});
Route::get('/order', [OrderController::class, 'createOrder'])->name('order');
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');
Route::post('/contacts', [MainController::class, 'contacts_post'])->name('contacts-post');

Route::get('/delivery', [MainController::class, 'delivery'])->name('delivery');
Route::post('/delivery', [MainController::class, 'delivery_post'])->name('delivery-post');
Route::get('/aboutcompany', [MainController::class, 'aboutCompany'])->name('aboutcompany');
Route::post('/aboutcompany', [MainController::class, 'aboutCompany_post'])->name('aboutcompany-post');



