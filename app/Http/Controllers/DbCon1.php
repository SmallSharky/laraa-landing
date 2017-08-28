<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DbCon1 extends Controller
{
    public function test()
    {
        //echo("show\n");
        return view('hello',array('name' => '\$username', 'copyright' => 'Be-be-be from show!'));
    }
}
