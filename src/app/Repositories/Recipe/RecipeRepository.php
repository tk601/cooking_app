<?php

namespace App\Repositories\Recipe;

use App\Models\Recipe;
use App\Repositories\Recipe\RecipeRepositoryInterface;

class RecipeRepository implements RecipeRepositoryInterface
{
    /**
     * 全てのレシピデータの取得
     * 
     * @return array $allRecipes
     */
    public function getAllRecipe()
    {
        $allIngredients = Recipe::all();
        return $allIngredients;
    }
}
