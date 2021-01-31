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

Route::resource('properties', PropertyController::class)->only([
    'index', 'show'
]);

Route::resource('articles', ArticleController::class)->only([
    'index', 'show'
]);

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('properties', PropertyController::class)->only([
        'create', 'store', 'update', 'destroy'
    ]);
    Route::get('/admin/tabproperties', [PropertyController::class, 'index2'])->name('admin.tabproperties');
    Route::get('/properties/edit/{id}', [PropertyController::class, 'edit'])->name('properties.edit');
    Route::delete('/properties/{id}', [PropertyController::class, 'destroy'])->name('properties.destroy');

    Route::get('/admin/tabarticles', [ArticleController::class, 'index'])->name('admin.tabarticles');
    Route::resource('articles', ArticleController::class)->only([
        'create', 'store', 'update', 'destroy'
    ]);
    Route::delete('/articles/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');
    Route::get('/articles/edit/{id}', [ArticleController::class, 'edit'])->name('articles.edit');

});


Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/', [PropertyController::class, 'index']);

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

//ARTICLES ROUTES
//Route::resource('articles', ArticleController::class);

//TAGS ROUTES
//Route::resource('tags', TagController::class);

//CATEGORIES ROUTES
//Route::resource('categories', CategoryController::class);

//IMAGES ROUTES
//Route::resource('images', ImageController::class);


