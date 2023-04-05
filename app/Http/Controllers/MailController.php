<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailableName;
use Illuminate\Support\Facades\Mail;
use PHPUnit\Framework\Exception;

class MailController extends Controller
{
    public function index(Request $request){
        $mailData = [
            "name" => $request->name,
            "number" => $request->number,
            "email" => $request->email,
            "message" => $request->message,
        ];

        Mail::to("artush.xalatyan@mail.ru")->send(new \App\Mail\MailableName($mailData));

        return redirect('/');
    }
}
