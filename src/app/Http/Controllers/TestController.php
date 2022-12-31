<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index () 
    {
        // $hello = 'Hello,World!';
        // $hello_array = ['Hello', 'こんにちは', 'ニーハオ'];

        // return view('index', compact('hello', 'hello_array'));


        $nums = [1, 5, 2, 8, 11, 15];
        $target = 9;

        $length = count($nums) - 1;
        var_dump($length);
        var_dump('<br>');
        for ($i = 0; $i <= $length; $i++) {
            for ($j = $i + 1; $j <= $length; $j++) {
                $sumResult = $nums[$i] + $nums[$j];
                if ($sumResult === $target) {
                    $test = [$i, $j];
                }
            }
        }
        var_dump('インデックス１「' . $test[0] . '」<br>');
        var_dump('インデックス2「' . $test[1] . '」');
        return view('index', compact('test'));
    }
}
