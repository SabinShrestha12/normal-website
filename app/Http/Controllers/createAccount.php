<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\creatAccount;

class createAccount extends Controller
{
    function index()
    {
    	return view('createAccount');
    }
    function storeData(Request $req)
    {
    	 $req->validate([
    		'fname'=>'required',
    		'lname'=>'required',
    		'email'=>'required',
    		'password'=>'required',
    		'contact'=>'required',
    		'address'=>'required'
    	]);

    	 $data = new creatAccount;
    	 $data->fname = $req->fname;
    	 $data->lname = $req->lname;
    	 $data->email = $req->email;
    	 $data->password = $req->password;
    	 $data->contact = $req->contact;
    	 $data->address = $req->address;
    	 $data->save();

    	$req->session()->flash('message','data inserted successfully');
    	return redirect('create_account');
    }
}
