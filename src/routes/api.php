<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// 材料一覧の取得
Route::get('/ingredient_list', 'App\Http\Controllers\IngredientController@ingredientList');

// 食材グループで検索
Route::post('/group_ingredient_list', 'App\Http\Controllers\IngredientController@groupIngredientList');

// 冷蔵庫データの更新
Route::post('/update_refrigerator', 'App\Http\Controllers\RefrigeratorController@update');

// レシピデータの取得
Route::get('/recipe_list', 'App\Http\Controllers\RecipeController@recipeList');
