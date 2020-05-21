<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    // 入力画面
    public function input()
    {
        // Bladeで使う変数
        $hash = array(
            'subtitle' => 'Contact Form（Demo）',
        );
        return view('contact_form_log.input')->with($hash);
    }

    // 確認画面
    public function confirm(\App\Http\Requests\ContactFormRequest $request)
    {
        // Bladeで使う変数
        $hash = array(
            'subtitle' => '確認画面',
            'request' => $request,
        );
        return view('contact_form_log.confirm')->with($hash);
    }

    // 完了画面
    public function finish(\App\Http\Requests\ContactFormRequest $request)
    {
        $user = new \App\ContactForm;
        $user->subject = $request->subject;
        $user->mail = $request->mail;
        $user->remarks = $request->remarks;
        $user->save();

        $hash = array(
            'subtitle' => '完了画面',
        );

        return view('contact_form_log.finish')->with($hash);
    }

}
