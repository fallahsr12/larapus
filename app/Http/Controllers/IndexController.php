<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
    	$a = 'selamat datang';
    	return $a;
    }

}
