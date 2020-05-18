<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'subject' => 'required',        // 件名
            'mail' => 'required|email',     // Eメール
            'remarks' => 'required|max:30' // 備考欄
        ];
    }

    public function messages()
    {
        return[
            'required' => '必須項目です。',
            'email' => 'メールアドレスの形式で入力してください',
            'remarks.max' => '30文字以下で入力してください'
        ];
    }
}
