<?php

use App\Http\Controllers\Iframe\IframeController;
use Illuminate\Support\Facades\Http;
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

Route::get('iframe/posts/{id}', IframeController::class);

Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');

Route::get('/', function () {
    return view('app');
})->name('index');
