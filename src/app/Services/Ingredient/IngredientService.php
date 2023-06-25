<?php

namespace App\Services\Ingredient;

use App\Repositories\Ingredient\IngredientRepositoryInterface;

/**
 * 材料serviceクラス
 * 
 * Ingredient
 * 
 */
class IngredientService
{
    /**
     * @var IngredientRepositoryInterface
     */
    protected $ingredientRepository;

    /**
     * コンストラクタ
     * 
     * @param IngredientRepositoryInterface $ingredientRepository
     */
    public function __construct(IngredientRepositoryInterface $ingredientRepository) {
        $this->ingredientRepository = $ingredientRepository;
    }

    /**
     * 食材データの作成
     * 
     * @return array $allIngredientList
     */
    public function getRevisedIngredient() {
        $allIngredients = $this->ingredientRepository->getAllIngredient();
        // \Log::debug('全ての食材');
        // \Log::debug($allIngredients);
        session_start();
        $sessionData = session('product_ids');

        $allIngredientList = [];
        foreach ($allIngredients as $key => $allIngredient) {
            $allIngredientList[$key]['id'] = $allIngredient['id'];
            $allIngredientList[$key]['ingredients_name'] = $allIngredient['ingredients_name'];
            $allIngredientList[$key]['ingredients_image'] = $allIngredient['ingredients_image'];
            $allIngredientList[$key]['ingredient_group_id'] = $allIngredient['ingredient_group_id'];

            // すでにユーザーの冷蔵庫に食材があればステータスを「true」にする
            // ログインデータを使用している時
            // k_todo:セッションを使用してた気の挙動が完了したらログインしいるときの処理を作成する

            // セッションを使用している時
            if (isset($sessionData) === true) {
                if (in_array($allIngredient['id'], $sessionData)) {
                // if ($allIngredient['id'] === 2) {
                    $allIngredientList[$key]['already_status'] = true;
                } else {
                    $allIngredientList[$key]['already_status'] = false;
                }
            } else {
                // k_todo:ここにログインしていた時の処理を追加する。現在は仮でfalseにしている
                    // ユーザーの冷蔵庫のテーブルから取得する。
                $allIngredientList[$key]['already_status'] = false;
            }
        }
        return $allIngredientList;
    }
}
