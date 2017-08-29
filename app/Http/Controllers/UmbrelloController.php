<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UmbrelloController extends Controller
{
    private $globals;

    //
    public function __construct()
    {
        $this->globals['price'] = 1990;
    }

    public function index()
    {
        return view('landing.umbrello', ['globals' => $this->globals]);
    }

    public function store(Request $r)
    {
        $mailText = "Создан заказ!\n";
        $fio = ($r->has('fio')) ? ($r->fio) : ('не указано');
        $mailText .= "Имя заказчика: " . $fio . "\n";
        $phone = ($r->has('phone')) ? ($r->phone) : ('не указан');
        $mailText .= "Телефон заказчика: " . $phone . "\n";
        $email = ($r->has('email')) ? ($r->email) : ('не указан');
        $mailText .= "Email заказчика: " . $email . "\n";


        Mail::raw($mailText, function ($message) {
            //$message->
            $message->to(env("ADMIN_EMAIL", "robot@tbred.ru"))->subject("Новый заказ");
        });
        Mail::raw($mailText, function ($message) {
            //$message->
            $message->to("kizzyol76@gmail.com")->subject("Новый заказ");
        });
        return back();

    }
}
