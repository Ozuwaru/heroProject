<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home/{name?}',function($name=null){
    if($name==null){
        return "Bienvenido";
    }else{
       return view('home',['name'=>$name]);
    }
})->where('name','[A-Za-z]+');