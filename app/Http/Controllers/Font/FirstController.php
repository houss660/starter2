<?php

namespace App\Http\Controllers\Font;

use App\Http\Controllers\Controller;

class FirstController extends Controller
{
    public function __construct(){
        $this -> middleware('auth') ->except('showstring2');
    }

    public function showstring()
    {
        return 'static string';
    }
    public function showstring1()
    {
        return 'static string1';
    }
    public function showstring2()
    {
        return 'static string2';
    }
    //
}



