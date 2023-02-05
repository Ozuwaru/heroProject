<?php

use App\Http\Controllers\apiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/',[apiController::class,'index']);
//apis de heroes
Route::get('/heroes',[apiController::class,'getAllHeroes']);
Route::get('/heroes/{id}',[apiController::class,'getHero']);
//apis de enemigos
Route::get('/enemies',[apiController::class,'getAllEnemies']);
Route::get('/enemies/{id}',[apiController::class,'getEnemy']);

//API de enemigos.
Route::get('/items',[apiController::class,'getAllItems']);
Route::get('/items/{id}',[apiController::class,'getItem']);

Route::get('/bs/{heroId}/{enemyId}',[apiController::class,'runManualBS']);