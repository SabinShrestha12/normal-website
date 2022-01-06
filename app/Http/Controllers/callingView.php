<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class callingView extends Controller
{
	function loadView()
	{
		return view('loadView');
	}
}
