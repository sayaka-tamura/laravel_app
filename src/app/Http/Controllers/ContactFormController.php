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

    public function contact_form(Request $request){
        // # リクエストを $dataArray に格納
        // # リクエストの中身　件名：$title メールアドレス:$email 内容：$body
        // $dataArray = $request->all();

        // # Mailファサード 第一引数:メールの文章（※Blade）, 第二引数:メール文章に渡す配列, 第三引数:クロージャー（メールアドレスや件名を定義）
        // Mail::send(array('text' => 'emails.message'), $dataArray, function ($message) use ($dataArray) {
        //     $message
        //     ->to($dataArray["email"])
        //     ->subject($dataArray["title"]);
        // });

        $data = [];

        Mail::send('emails.message', $data, function($message){
            $message->to('abc987@example.com', 'Test')
            ->subject('This is a test mail');
        });
    }
}
