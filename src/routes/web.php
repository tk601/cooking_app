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

Route::get('/{any}', function() {
    return view('app');
})->where('any', '.*');


// ログイン処理あとで復活(20220102)
// Auth::routes();
// Route::get('/test', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
