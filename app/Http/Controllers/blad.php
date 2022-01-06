<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class blad extends Controller
{
    function loadBlad()
    {
    	//$data = DB::select('select * from users');
    	return view('bladeTut',["name"=>['sabin','saujan']]);
    }
}
