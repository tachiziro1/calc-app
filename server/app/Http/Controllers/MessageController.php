<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function hello()
    {
        $msg = 'Hello from Cntroller';
        // 代2引数にデータを渡す
        return view('message.hello',['a' => $msg]);
    }
    // public function show($msg)
    // {
    //     return view('message.show',['msg' => $msg]);
    // }
    public function show($name,$msg,$msgt)
    {
        return view('message.show',['name'=>$name,'msg'=>$msg,'msgt'=>$msgt]);
    }

}