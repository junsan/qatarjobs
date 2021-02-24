<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\SourceController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ClassifiedsController;
use App\Http\Controllers\CategoryController;

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

Route::get('/jobs/{slug?}/{id?}', [JobsController::class, 'index'])->name('jobs.index');
Route::get('/jobs/{id}/{slug?}', [JobsController::class, 'show'])->name('jobs.show');

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{id}/{slug?}', [NewsController::class, 'show'])->name('news.show');

Route::get('/events', [EventsController::class, 'index'])->name('events.index');
Route::get('/events/{id}/{slug?}', [EventsController::class, 'show'])->name('events.show');

Route::get('/classified', [ClassifiedsController::class, 'index'])->name('classifieds.index');
Route::get('/classified/{id}/{slug?}', [ClassifiedsController::class, 'show'])->name('classifieds.show');

Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/admin/news', [NewsController::class, 'admin_index']);
Route::post('/admin/news', [NewsController::class, 'store'])->name('news.store');

Route::get('/admin/events', [EventsController::class, 'admin_index']);
Route::post('/admin/events', [EventsController::class, 'store'])->name('events.store');

Route::get('/admin/company', [CompanyController::class, 'index'])->name('company.create');
Route::post('/admin/company', [CompanyController::class, 'store'])->name('company.store');

Route::get('/admin/jobs', [JobsController::class, 'admin_index'])->name('jobs.create');
Route::post('/admin/jobs', [JobsController::class, 'store'])->name('jobs.store');
Route::get('/admin/jobs_list', [JobsController::class, 'jobs_list'])->name('jobs.list');
Route::get('/admin/job/{id}/', [JobsController::class, 'edit'])->name('jobs.edit');
Route::put('/admin/job/{id}/', [JobsController::class, 'update'])->name('jobs.update');

Route::get('/admin/source', [SourceController::class, 'admin_index'])->name('source.create');
Route::post('/admin/source', [SourceController::class, 'store'])->name('source.store');

Route::get('/admin/category', [CategoryController::class, 'admin_index'])->name('category.create');
Route::post('/admin/category', [CategoryController::class, 'store'])->name('category.store');

Route::get('/admin/classifieds', [ClassifiedsController::class, 'admin_index'])->name('classifieds.create');
Route::post('/admin/classifieds', [ClassifiedsController::class, 'store'])->name('classifieds.store');

Route::get('/admin/classified_image', [ClassifiedsController::class, 'classified_image'])->name('classified_image.create');
Route::post('/admin/classified_image', [ClassifiedsController::class, 'classified_image_store'])->name('classified_image.store');

Route::get('/php', function () {
    return view('php');
});