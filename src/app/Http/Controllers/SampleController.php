<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\SampleNotification;

class SampleController extends Controller
{
    public function SampleNotification()
    {
        $name = 'ララベル太郎';
        $text = 'これからもよろしくお願いいたします。';
        $to = 'test@gmail.com';
        $cc = 'cc@mail.com';
        $bcc = 'bcc@mail.com';
        Mail::to($to)
        ->cc($cc)
        ->bcc($bcc)
        ->send(new SampleNotification($name, $text));
    }
}
