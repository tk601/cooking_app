<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Recipe\RecipeService;

class RecipeController extends Controller
{
    /**
     * @var RecipeService
     */
    protected $recipeService;

    /**
     * コンストラクタ
     * 
     * @param RecipeService $recipeService
     */
    public function __construct(RecipeService $recipeService)
    {
        $this->recipeService = $recipeService;
    }

    /**
     * レシピ一覧の取得
     * 
     * @return json
     */
    public function recipeList() {
        $allRecipeList = $this->recipeService->getRevisedRecipe();
        
        return response()->json(
            [
                'allRecipeList' => $allRecipeList
            ]
        );
    }
}
