<?php

namespace App\Repositories\Ingredient;

use App\Models\Ingredient;
use App\Models\IngredientGroup;
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

    /**
     * ずべての食材グループの取得
     * 
     * @return array $allIngredientGroups
     */
    public function getAllIngredientGroup()
    {
        $allIngredientGroups = IngredientGroup::all();
        return $allIngredientGroups;
    }
}
