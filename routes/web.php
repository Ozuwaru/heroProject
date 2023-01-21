<?php
use App\Http\Controllers\heroesController;
use App\Http\Controllers\itemsController;
use App\Http\Controllers\enemiesController;

use App\Http\Controllers\AdminController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/   

// Route::get('/admin/{name?}','AdminController@index');

Route::group(['prefix'=> 'admin'],function(){
    Route::get('heroes',[heroesController::class,'index'])->name('admin.heroes');
    Route::get('items',[itemsController::class,'index'])->name('admin.items');
    Route::get('enemies',[enemiesController::class,'index'])->name('admin.enemies');
    Route::get('/',[AdminController::class,'index'])->name('admin');
});




