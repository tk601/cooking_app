<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('recipe_name')->comment('レシピ名');
            $table->string('recipe_group_id')->comment('レシピグループID');
            $table->string('recipe_image')->comment('レシピ画像');
            $table->string('ingredient_ids')->comment('食材IDの一覧');
            $table->string('recipe1')->comment('レシピ手順1');
            $table->string('recipe2')->comment('レシピ手順2');
            $table->string('recipe3')->comment('レシピ手順3');
            $table->string('recipe4')->comment('レシピ手順4');
            $table->string('recipe5')->comment('レシピ手順5');
            $table->string('recipe6')->comment('レシピ手順6');
            $table->string('recipe7')->comment('レシピ手順7');
            $table->string('recipe8')->comment('レシピ手順8');
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
        Schema::dropIfExists('recipes');
    }
}
