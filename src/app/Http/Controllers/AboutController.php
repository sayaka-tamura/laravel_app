<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function getIndex()
    {
        return view('/TitleAndLink/about');
    }
}
