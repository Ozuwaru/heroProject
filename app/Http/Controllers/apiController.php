<?php

namespace App\Http\Controllers;

use App\Models\enemy;
use App\Models\hero;
use App\Models\item;
use Illuminate\Http\Request;
use App\Http\Controllers\BSController;

class apiController extends Controller
{
    public function index(){
        $res=[
             'status'=> 'ok',
             'message'=>'The API is working correctly'
        ];
        return response()->json($res,200);
    }

    public function getOneObject($entity,$name,$case){
        if(!$case){
            if(isset($entity)){
            $res=[
                'status'=>'ok',
                'mesagge'=>"Obtener {$name} {$entity->name}",
                'data'=>$entity];
            }else{
                $res=[
                    'status'=>'error',
                    'mesagge'=>"Dicho {$name} no existe",
                ];
            }
        }else{
            $res=[
                'status'=>'ok',
                'mesagge'=>"Lista de {$name}",
                'data'=>$entity
            ];
        }
        
        return response()->json($res,200);
    }
    public function getAllHeroes(){
        $heroes = hero::all();
        $name='Heroes';
        return $this->getOneObject($heroes,$name,true);

    }
    public function getHero($id){
        $hero=hero::find($id);
        $name= "Heroe";
        return $this->getOneObject($hero,$name,false);
    }



    public function getAllEnemies(){
        $enemies = enemy::all();
        $name='Enemigos';
        return $this->getOneObject($enemies,$name,true);
        
    }
    public function getEnemy($id){
        $enemy=enemy::find($id);
        $name= "Enemigo";
        return $this->getOneObject($enemy,$name,false);
        
    }



    public function getAllItems(){
        $items = item::all();
        $name='Items';
        return $this->getOneObject($items,$name,true);
    }
    public function getItem($id){
        $item=item::find($id);
        $name= "Item";
        return $this->getOneObject($item,$name,false);
        
    }
    public function runManualBS($heroId,$enemyId){
        $bs= BSController::runAutoBattle($heroId,$enemyId);
        $res =[
            "status"=>"ok",
            "message"=>"Sistema de batalla entre {$bs['hero']} y {$bs['enemy']}",
            "data"=>$bs
        ];
        return response()->json($res,200);
    }
}
