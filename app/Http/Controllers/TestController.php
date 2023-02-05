<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){

        //Burasi bana view dondurecek.
        return view(view: 'test');

    }

    public function detail(){

        //Burasi bana view dondurecek.
        return view(view: 'detail');

    }
}
