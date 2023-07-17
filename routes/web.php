<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
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




Route::get('/', [PageController::class, 'getHome']);
Route::get('/services', [PageController::class, 'getServices']);
Route::post('/contact', [LeadController::class, 'postContact']);

Route::get('/dashboard/articles', [ArticleController::class, 'dashboardIndex'])->middleware('auth');
Route::get('/dashboard/articles/create', [ArticleController::class, 'create'])->middleware('auth');
Route::post('/dashboard/articles/create', [ArticleController::class, 'store'])->middleware('auth');
Route::get('/dashboard/articles/{id}', [ArticleController::class, 'edit'])->middleware('auth');
Route::post('/dashboard/articles/{id}', [ArticleController::class, 'update'])->middleware('auth');
Route::get('/dashboard/articles/delete/{id}', [ArticleController::class, 'delete'])->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
