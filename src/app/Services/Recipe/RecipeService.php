<?php

namespace App\Services\Recipe;

use App\Repositories\Recipe\RecipeRepositoryInterface;

/**
 * レシピserviceクラス
 * 
 * Recipe
 * 
 */
class RecipeService
{
    /**
     * @var RecipeRepositoryInterface
     */
    protected $recipeRepository;

    /**
     * コンストラクタ
     * 
     * @param RecipeRepositoryInterface $recipeRepository
     */
    public function __construct(RecipeRepositoryInterface $recipeRepository) {
        $this->recipeRepository = $recipeRepository;
    }

    /**
     * レシピデータの取得
     * 
     * @return array $allRecipeList
     */
    public function getRevisedRecipe() {
        session_start();
        $ingredientIds = session('product_ids');

        $allRecipes = $this->recipeRepository->getAllRecipe();

        $selectMakeRecipes = [];

        if (!empty($ingredientIds)) {
            foreach ($allRecipes as $key => $recipe) {
                $recipeIds = json_decode($recipe['ingredient_ids']);
                $checkResult = $this->checkIngredient($recipeIds, $ingredientIds);
                if ($checkResult === true) {
                    $selectMakeRecipes[$key] = $recipe;
                }
            }
        }
        
        return $selectMakeRecipes;
    }

    /**
     * 
     */
    public function checkIngredient($recipeIds, $ingredientIds) {
        foreach ($recipeIds as $recipeId) {
            if (!in_array($recipeId, $ingredientIds)) {
                return false;
            }
            $checkResult = true;
        }
        return $checkResult;
    }
}
