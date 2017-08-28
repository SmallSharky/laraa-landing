<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UmbrelloController extends Controller
{
    //
    public function index(){
        return view('landing.umbrello');
    }
    public function store(Request $r){
        $mailText = "Создан заказ!\n";
        $mailText .= "Email заказчика: ". $r->email ."\n";
        $mailText .= "ФИО заказчика: ". $r->fio ."\n";

        Mail::raw($mailText, function ($message) {
            //$message->
            $message->to(env("ADMIN_EMAIL", "robot@tbred.ru"))->subject("Новый заказ");
        });
        Mail::raw($mailText, function ($message) {
            //$message->
            $message->to("kizzyol76@gmail.com")->subject("Новый заказ");
        });
        
    }
}
