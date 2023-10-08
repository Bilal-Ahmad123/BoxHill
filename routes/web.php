<?php

use App\Http\Controllers\ProfileController;
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
})->name('welcome');

Route::get('/cart', 'App\Http\Controllers\PagesController@cart')
    ->name('cart.show')
    ->middleware(['auth', 'verified']);

Route::get('/cart/update/{id}', 'App\Http\Controllers\CartController@edit')->name('cart.update');

Route::get('/cart/delete/{id}', 'App\Http\Controllers\CartController@delete')->name('cart.destroy');

Route::get('/glasses', 'App\Http\Controllers\PagesController@glasses')
    ->middleware(['auth', 'verified'])
    ->name('glasses');
Route::get('/watches', 'App\Http\Controllers\PagesController@watches')
    ->middleware(['auth', 'verified'])
    ->name('watches');
Route::get('/shirts', 'App\Http\Controllers\PagesController@shirts')
    ->middleware(['auth', 'verified'])
    ->name('shirts');
Route::get('/chairs', 'App\Http\Controllers\PagesController@chairs')
    ->middleware(['auth', 'verified'])
    ->name('chairs');

Route::post('/store/{id}', 'App\Http\Controllers\CartController@store')->name('member.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
