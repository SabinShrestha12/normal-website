<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\path;
use App\Http\Controllers\manual;
use App\Http\Controllers\callingView;
use App\Http\Controllers\blad;
use App\Http\Controllers\formData;
use App\Http\Controllers\getData1;
use App\Http\Controllers\getData2;
use App\Http\Controllers\getData3;
use App\Http\Controllers\getData4;
use App\Http\Controllers\validate;
use App\Http\Controllers\createAccount;
use App\Http\Controllers\feedback;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[feedback::class,'loadview']);
/*calling views*/
Route::get('/index/{id}',function($id)
{
	return view('practise.index',['name'=>$id]);
});
/*calling view using controler*/

Route::get('loadView',[callingView::class,'loadView']);

/*Route::view("index","index");*/

/*calling controllers*/
Route::get("user",[User::class,'show']);
Route::get("path/{name}",[path::class,'invoke']);

Route::view('cmp','practise.cmp');
Route::view('about','practise.about');
Route::get('blade',[blad::class,'loadBlad']);

/*form part from here*/
Route::post('form',[formData::class,'getData']);
Route::view('login','practise.form');
Route::post('form1',[getData1::class,'formData1']);
Route::view('login1','practise.form1');

Route::post('form2',[getData2::class,'data2']);
Route::view('form2','practise.form2');

Route::view('form3','form3');
Route::post('login3',[getData3::class,'data3']);

Route::view('restriction','practise.no_access');
Route::view('success','practise.success');
Route::view('middle','practise.middle')->middleware('test');
Route::post('login4',[getData4::class,'loadData4']);

#blogg part starts from here
Route::view('master','blogg.layout');
Route::view('header','header');
Route::view('login','login');
Route::view('slider','slider');
Route::view('about_us','aboutus');
Route::view('container','container');
Route::view('footer','footer');
Route::get('content',[feedback::class,'returnData']);

Route::post("validate",[validate::class,'validation']);

Route::get('create_account',[createAccount::Class,'index']);
Route::post('create',[createAccount::class,'storeData']);
Route::post('feedback',[feedback::class,'getData']);
