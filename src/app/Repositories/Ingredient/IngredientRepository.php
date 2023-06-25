<?php

namespace App\Repositories\Ingredient;

use App\Models\Ingredient;
use App\Repositories\Ingredient\IngredientRepositoryInterface;

class IngredientRepository implements IngredientRepositoryInterface
{
    /**
     * 全ての食材データの取得
     * 
     * @return array $allIngredients
     */
    public function getAllIngredient()
    {
        $allIngredients = Ingredient::all();
        return $allIngredients;
    }
}
