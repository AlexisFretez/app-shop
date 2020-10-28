<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function welcome(){


    	$a = 10 +5;
		return view('welcome');
	}
}
