<?php

namespace App\Http\Controllers\Font;

use Illuminate\Routing\Controller as BaseController;

class user23 extends BaseController
{
    public function showadmin(){
        return 'ahmad';
    }

    public function getindex(){

$data=['ahmad','array'];

            return view('welcome',compact('data'));
    }




}
