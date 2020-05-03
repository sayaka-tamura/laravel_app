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
    return view('helo', ['message' => 'Please Type Something...']);
  }

  public function postIndex(Request $request)
  {
    $res = "You typed: " . $request->input('str');
    return view ('helo',);
  }
}
