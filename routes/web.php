<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SourceController;
use App\Http\Controllers\CompanyController;
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

Route::get('/jobs', [JobsController::class, 'index'])->name('jobs.index');
Route::get('/jobs/{id}/{slug?}', [JobsController::class, 'show'])->name('jobs.show');

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{id}/{slug?}', [NewsController::class, 'show'])->name('news.show');

Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/admin/news', [NewsController::class, 'admin_index']);
Route::post('/admin/news', [NewsController::class, 'store'])->name('news.store');

Route::get('/admin/company', [CompanyController::class, 'index'])->name('company.create');
Route::post('/admin/company', [CompanyController::class, 'store'])->name('company.store');

Route::get('/admin/jobs', [JobsController::class, 'admin_index'])->name('jobs.create');
Route::post('/admin/jobs', [JobsController::class, 'store'])->name('jobs.store');

Route::get('/admin/source', [SourceController::class, 'admin_index'])->name('source.create');
Route::post('/admin/source', [SourceController::class, 'store'])->name('source.store');

Route::get('/php', function () {
    return view('php');
});