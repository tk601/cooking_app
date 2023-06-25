<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_recipes', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->comment('ユーザーID');
            $table->string('recipe_name')->comment('レシピ名');
            $table->string('recipe_image')->comment('レシピ画像');
            $table->string('recipe1')->comment('手順1');
            $table->string('recipe2')->comment('手順2');
            $table->string('recipe3')->comment('手順3');
            $table->string('recipe4')->comment('手順4');
            $table->string('recipe5')->comment('手順5');
            $table->string('recipe6')->comment('手順6');
            $table->string('recipe7')->comment('手順7');
            $table->string('recipe8')->comment('手順8');
            $table->string('recommended_points')->comment('おすすめポイント');
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_recipes');
    }
}
