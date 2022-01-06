<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class getData1 extends Controller
{
	public $req;
   function formData1(Request $req)
   {
   		$this->req = $req;
   		return $this->req->input();
   }
}
