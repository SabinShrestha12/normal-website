<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class getData2 extends Controller
{
	protected $req;
    function data2(Request $req)
    {

    	$this->req = $req;
    	return $this->req->input();
    }
}
