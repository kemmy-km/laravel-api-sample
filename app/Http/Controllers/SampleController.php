<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    /** コントローラで指定するタイプのAPIメソッド */
    public function apiHello() {
        return response()->json(
            [
                'Good morning' => 'おはよう',
                'Hello' => 'こんにちは',
                'Good Evening' => 'こんばんわ',
            ],
            [
                'Good morning' => 'おはよう2',
                'Hello' => 'こんにちは2',
            ],
            [
                'Good morning' => 'おはよう3',
                'Hello' => 'こんにちは3',
            ],
        );
    }
}
