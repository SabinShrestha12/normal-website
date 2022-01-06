<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feedbackData;
use App\Models\country;
use Illuminate\Support\Facades\DB;
class feedback extends Controller
{

    public function getData(Request $req)
    {
    	$data = DB::select('select country_name from country');
    	$feedbackData = new feedbackData;
    	$req->validate([
    		'name'=>'required',
    		// 'country'=>'required',
    		'feedback'=>'required'
    	]);
    	return view('blog_index',$data);
    }
     function loadview()
    {
    	return view('blog_index');
    }
}
