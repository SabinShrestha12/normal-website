<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class formData extends Controller
{
	protected $req = "";
	function getData(Request $req)
	{
		$this->req = $req;
		return $this->req->input();
	}
}
