<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValiDemoController extends Controller
{
    public function getIndex()
    {
        return view('validation.index');
    }

    // Controller で実装する Form Validation
    // public function confirm(Request $request)
    // {
    //     // Make Validation Rules
    //     $validateRules = [
    //         'username' => 'required',
    //         'mail' => 'required|email',
    //         'age' => 'required|numeric',
    //         'opinion' => 'required|max:500'
    //     ];

    //     // Make Validation Error Messages 
    //     $validateMessages = [
    //         "required" => "必須項目です。",
    //         "email" => "メールアドレスの形式で入力してください。",
    //         "numeric" => "数値で入力してください。",
    //         "opinion.max" => "500文字以内で入力してください。"
    //     ];

    //     // バリデーションをインスタンス化
    //     $this->validate($request, $validateRules, $validateMessages);

    //     $data = $request->all();    // Initialize data 変数 + Collection の中身を配列で取得する

    //     return view('validation.confirm')->with($data); // data 変数を confirm page に send & show it
    // }

    // Form Request で実装する Validation
    // DIのフォームリクエストはuseでパスを省略してもOK
    public function confirm(\App\Http\Requests\ValiDemoRequest $request)
    {
        $data = $request->all();
        return view('validation.confirm')->with($data);
    }
}
