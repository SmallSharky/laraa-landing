<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AJAX_GetUserInfo extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }
     public function JSON()
    {
        if(!Auth::check())return "";
        $userAttrib = Auth::user()->getAttributes();

        $retval = "{\n";
        $retval .= "\t\"name\":\"".$userAttrib['name']."\",\n";
        $retval .= "\t\"email\":\"".$userAttrib['email']."\",\n";
        $retval .= "\t\"created_at\":\"".$userAttrib['created_at']."\"\n";


        $retval .= "}";
        return $retval;

    }
}
