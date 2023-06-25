<?php

namespace App\Repositories\Refrigerator;

use App\Repositories\Refrigerator\RefrigeratorRepositoryInterface;

class RefrigeratorRepository implements RefrigeratorRepositoryInterface
{
    public function testSecond()
    {
        $tt = 'テストなんです';
        
        return $tt;
    }
}
