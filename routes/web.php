<?php

use App\Http\Controllers\LinkController;
use App\Http\Controllers\PostController;
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
    return view('index');
});

/*
 * Posts Routes
 */
Route::get('/posts',[PostController::class, 'index']);
Route::get('/posts/{slug}',[PostController::class, 'show'])->name('post.show');

/*
 * Links Routes
 */
Route::get('/links',[LinkController::class, 'index'])->name('link.index');
Route::get('/links/{uuid}',[LinkController::class, 'show'])->name('link.show');
