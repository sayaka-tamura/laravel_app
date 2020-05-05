<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // 入力
    public function input()
    {
        // Bladeで使う変数
        $hash = array(
            'subtitle' => '入力画面',
        );
        return view('contact.input')->with($hash);
    }
}
