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

// k_todo:あとでrouteを消し、全てvueを使用したものにする
Route::get('/{any}', function () {
    return view('main');
})
->where('any', '.*');

// ログイン処理あとで復活(20220102)
// Auth::routes();
Route::get('/test', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ログインした後にログアウトボタンを表示できるview
Route::get('/app', function () {
    return view('layouts/app');
});


// ーーーーーーーーーーーーーーーーーーー 以下メモよう ーーーーーーーーーーーーーーーーーーー

// 全てvue-routerを使用したとき
// Route::get('/{any}', function() {
//     return view('main');
// })->where('any', '.*');

// 画面を遷移してもセッションが残る？
// Route::group(['middleware' => ['web']], function () {
//     // ここに処理を入れる
//     ->middleware('session');
// });
