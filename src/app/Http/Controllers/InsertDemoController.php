<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsertDemoController extends Controller
{
    public function getIndex()
    {
        return view('insert.index');
    }

    public function confirm(\App\Http\Requests\InsertDemoRequest $request)
    {
        $data = $request->all();
        return view('insert.confirm')->with($data);
    }

    public function finish(\App\Http\Requests\InsertDemoRequest $request)
    {
        $user = new \App\Worker;
        $user->username = $request->username;
        $user->mail = $request->mail;
        $user->age = $request->age;
        $user->save();

        return view('insert.finish');
    }
}
