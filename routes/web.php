<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ImageController;
//use Spatie\Menu\Menu;

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

Route::get('/admin', function () {
    return view('admin.admin');
});
Route::get('/', [PropertyController::class, 'index']);

Route::get('/admin/tabproperties', [PropertyController::class, 'index2']);
Route::get('/admin/tabarticles', [ArticleController::class, 'index']);





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//ARTICLES ROUTES
//Route::resource('articles', ArticleController::class);

//PROPERTIES ROUTES
Route::resource('properties', PropertyController::class);

//TAGS ROUTES
//Route::resource('tags', TagController::class);

//CATEGORIES ROUTES
//Route::resource('categories', CategoryController::class);

//IMAGES ROUTES
//Route::resource('images', ImageController::class);


