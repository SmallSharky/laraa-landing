<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmbrelloController extends Controller
{
    //
    public function index(){
        return view('landing.umbrello');
    }
    public function order(Request $r){
        $mailText = "Создан заказ!\n";
        $mailText .= "Email заказчика: ". $r->email ."\n";
        $mailText .= "ФИО заказчика: ". $r->fio ."\n";

        Mail::raw($mailText, function ($message) {
            //$message->
            $message->to(env("ADMIN_EMAIL", "admin@tbred.ru"))->subject("Новый заказ");
        });
    }
}
