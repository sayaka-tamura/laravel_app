<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;    // ★
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'last_name' => 'required', // 名字
            'first_name' => 'required', // 名前
            'mail' => 'required|email', // Eメール
            'password' => 'required|min:8|regex:/^[a-zA-Z0-9-]+$/|max:25', // パスワード
            'zip01' => 'required|numeric', // 郵便番号
            'pref01' => 'required', // 都道府県
            'addr01' => 'required', // 住所
            'skill' => 'required', // スキル
            'remarks' => 'required|max:30', // 備考欄
            'terms' => 'required' // 利用規約
        ];
    }

    public function messages()
    {
        return [
            'required' => '必須項目です。',
            'email' => 'メールアドレスの形式で入力してください',
            'numeric' => '数値で入力してください',
            'password.min' => '8文字以上で入力してください',
            'regex' => '英数字で入力してください',
            'password.max' => '25文字以下で入力してください',
            'remarks.max' => '30文字以下で入力してください'
        ];
    }
}
