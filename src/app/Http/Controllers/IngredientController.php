<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ingredient\IngredientService;

// 食材関連のcontrollerクラス
class IngredientController extends Controller
{
    /**
     * @var IngredientService
     */
    protected $ingredientService;

    /**
     * コンストラクタ
     * 
     * @param IngredientService $ingredientService
     */
    public function __construct(IngredientService $ingredientService)
    {
        $this->ingredientService = $ingredientService;
    }

    /**
     * 食材一覧の取得
     * 
     * @return json
     */
    public function ingredientList() {
        $allIngredientList = $this->ingredientService->getRevisedIngredient();
        
        return response()->json(
            [
                'allIngredientList' => $allIngredientList
            ]
        );
    }

    /**
     * 食材グループで検索
     * 
     * @param \Illuminate\Http\Request $request
     * @return json グループで検索された食材の一覧
     */
    public function groupIngredientList(Request $request) {
        $requestData = $request->all();
        return response()->json(
            [
                'allIngredientList' => $requestData
            ]
        );
    }
}
