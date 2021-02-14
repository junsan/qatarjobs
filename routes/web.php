<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::resource('news', NewsController::class);

Route::get('/admin', [NewsController::class, 'admin_index']);
Route::post('/admin', [NewsController::class, 'store'])->name('store_news');

Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/php', function () {
    return view('php');
});