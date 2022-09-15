<?php

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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/posts/PostCon')


Route::resource('/authors', App\Http\Controllers\authorController::class);


Route::resource('/posts', App\Http\Controllers\PostController::class);
// Route::get('postsnew/{id}', [App\Http\Controllers\PostController::class, 'indexnew']);
// Route::get('/routes.trend', [App\Http\Controllers\PostController::class]);
Route::get('/posts/trend', [App\Http\Controllers\PostController::class, 'trend']);

