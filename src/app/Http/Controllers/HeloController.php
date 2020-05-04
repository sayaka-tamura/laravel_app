<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HeloController extends Controller
{
  public function getIndex(Request $request)
  {
    // views>helo.php を見に行く
    return view('/simpleForm/helo', ['message' => 'Please Type Something...']);

    // url に入力したクエリを反映する
    // $res = 'ID : ' . $request->id;

    // $res = 'URL : ' . $request->url()           // URLを得る
    // . '<br>Long URL : ' . $request->fullUrl()   // フルURLを得る
    // . '<br>PATH : ' . $request->path();         // パスを得る
    //return view('helo', ['message' => $res]);
  }

  public function postIndex(Request $request)
  {
    // Try to Redirect and post that user typed at helo.php
    $res = "You typed: " . $request->input('str');
    return view ('/simpleForm/helo',['message' => $res]);

      // $output = $request->str;
      // return view('send',compact('output'));
  }
}
