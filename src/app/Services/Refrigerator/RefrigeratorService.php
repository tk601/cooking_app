<?php

namespace App\Services\Refrigerator;

use App\Repositories\Refrigerator\RefrigeratorRepositoryInterface;
use Illuminate\Support\Facades\Session;

/**
 * 冷蔵庫serviceクラス
 * 
 * Refrigerator
 * 
 */
class RefrigeratorService
{
    /**
     * @var RefrigeratorRepositoryInterface
     */
    protected $refrigeratorRepository;

    /**
     * コンストラクタ
     * 
     * @param RefrigeratorRepositoryInterface $refrigeratorRepository
     */
    public function __construct(RefrigeratorRepositoryInterface $refrigeratorRepository) {
        $this->refrigeratorRepository = $refrigeratorRepository;
    }

    /**
     * 冷蔵庫の中身の更新
     * 
     * @param $requestData 食材データ
     */
    public function updateRefrigerator($requestData) {
        $ingredientId = $requestData['ingredientId'];
        $ingredientStatus = $requestData['ingredientStatus'];
        // デバッグ
        // \Log::debug('食材データ');
        // \Log::debug('id:'.$ingredientId);
        // \Log::debug('status:'.$ingredientStatus);


        // ログインしている時
        // k_todo:DBに保存する処理を追加

        // セッションを使用している時
        session_start();

        // ステータスがあればセッションに保存、なければ削除
        if ($ingredientStatus) {
            session()->push('product_ids', $ingredientId);
        } else {
            // 取り出したデータに同じ値があれば削除して再代入する
            $allData = session('product_ids');
            $results = array_diff($allData, array($ingredientId));
            $results = array_values($results);
            session()->forget('product_ids');
            foreach ($results as $result) {
                session()->push('product_ids', $result);    
            }
        }

        $resultData = session('product_ids');
        \Log::debug('更新後のセッションデータ');
        \Log::debug($resultData);
        

        // $tt = $this->refrigeratorRepository->testSecond();
        return $resultData;
    }
}
