<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class path extends Controller
{
    function invoke($name)
    {
    	echo $name;
    }
}
