<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MailController;
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



Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('properties', PropertyController::class)->except([
        'index', 'show'
    ]);
    Route::resource('articles', ArticleController::class)->except([
        'index','show'
    ]);
    Route::resource('tags', TagController::class)->only([
        'create', 'store'
    ]);


    //routes tables properties
    Route::get('/admin/tabproperties', [PropertyController::class, 'index2'])->name('admin.tabproperties');
    Route::get('/properties/edit/{id}', [PropertyController::class, 'edit'])->name('properties.edit');
    Route::delete('/properties/{id}', [PropertyController::class, 'destroy'])->name('properties.destroy');


    //routes tables articles
    Route::get('/admin/tabarticles', [ArticleController::class, 'index'])->name('admin.tabarticles');
    Route::delete('/articles/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');
    Route::get('/articles/edit/{id}', [ArticleController::class, 'edit'])->name('articles.edit');

});


Route::get('/admin', function () {
    return view('admin.admin');
});
Route::get('/contact', function (){return view('contact.contact');})->name('contact');

Route::get('/mentions', function (){return view('mentions.mentions');})->name('mentions');

Route::get('/quisommesnous', function (){return view('qui-sommes-nous.qui-sommes-nous');})->name('quisommesnous');

Route::get('/properties/index', [PropertyController::class, 'index3'])->name('properties.index');
Route::get('/properties/index/detail/{id}', [PropertyController::class, 'detail'])->name('properties.detail');

Route::get('/articles/index', [ArticleController::class, 'index2'])->name('article.index');

Route::get('/', [PropertyController::class, 'index'])->name('accueil');

Route::post('/', [MailController::class, 'store'])->name('newsletter');



//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

//ARTICLES ROUTES
//Route::resource('articles', ArticleController::class);

//TAGS ROUTES
//Route::resource('tags', TagController::class);

//PROPERTIES ROUTES
//Route::resource('properties', PropertyController::class);

//CATEGORIES ROUTES
//Route::resource('categories', CategoryController::class);

//IMAGES ROUTES
//Route::resource('images', ImageController::class);


