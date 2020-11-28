<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HogeController extends Controller
{
    public function index()
    {
        $data = [
            ['name'=>'山田太郎' , 'mail'=>'taro@yamada'],
            ['name'=>'田中花子' , 'mail'=>'ttanaka@hanako'],
            ['name'=>'杉田智和' , 'mail'=>'ikisugita@tomokazu']
        ];
        return view('hello.index', ['data' =>$data]);
    }

    public function post(Request $request)
    {
        $msg = $request->msg;
        $data = [
            'msg'=>'こんにちは' . $msg . 'さん！',
        ];
        return view('hello.index',$data);
    }
}
