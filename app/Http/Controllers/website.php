<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class website extends Controller
{
    //
    public function index()
    {
        $data=["name"=>'rishi','data'=>'hello'];
        $user['to']='hrishikesh.fyntune@gmail.com';
        Mail::send('mail',$data,function($message) use ($user){
            $message->to($user['to']);
            $message->subject('test');

        });
    }
}
