<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userLogin;
use Illuminate\Support\Facades\Hash;

class validate extends Controller
{
    function validation(Request $req)
    {
    	//validating the request
    	$req->validate(
    		[
    			'email' => 'required',
    			'password' => 'required'
    	]);
    	//checking if request inputs exist in database or not
    	$email = userLogin::where(['email'=>$req->email])->first();
    	$pass = userLogin::where(['password'=>$req->password])->first();
    	if($email && $pass)
    	{
    		$req->session()->put('email',$req->input('email'));
       		return view('practise.success');
    	}
    	else
    	{
    		$req->session()->flash('status', 'please enter valid input');
    		return redirect('login');
    	}
    }
}
