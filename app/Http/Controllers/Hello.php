<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hello extends Controller
{
    //
    public function index(){
        return 'hello world from controller : )';
    }
    public function show($name)
    {
        //echo("show\n");
        return view('hello',array('name' => $name, 'copyright' => 'Be-be-be from show!'));
    }
    public function show1($name){
        //echo("Show1\n");
        return view('hello',array('name' => $name, 'copyright' => 'Be-be-be from show 1!'));
    }
}
