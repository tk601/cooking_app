<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Refrigerator\RefrigeratorService;

class RefrigeratorController extends Controller
{
    /**
     * @var RefrigeratorService
     */
    protected $refrigeratorService;

    /**
     * コンストラクタ
     * 
     * @param RefrigeratorService $refrigeratorService
     */
    public function __construct(RefrigeratorService $refrigeratorService)
    {
        $this->refrigeratorService = $refrigeratorService;
    }

    /**
     * 冷蔵庫の中身の更新
     * 
     * @param \Illuminate\Http\Request $request
     * @return json
     */
    public function update(Request $request) {
        $requestData = $request->all();

        $test = $this->refrigeratorService->updateRefrigerator($requestData);

        return response()->json(
            [
                'test' => $test
            ]
        );
    }
}
