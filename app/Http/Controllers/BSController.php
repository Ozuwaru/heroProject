<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hero;
use App\Models\enemy;

class BSController extends Controller
{
    public function index(){

 
        return view('admin.bs.index',$this->runAutoBattle(10,1));

    }
    public function runAutoBattle($heroId,$enemyId){
        $hero=hero::find($heroId);
        $enemy=enemy::find($enemyId);
        $events= [];
        $heroHp= $hero->hp;
        $enemyHp= $enemy->hp;

        while($heroHp>0  &&  $enemyHp>0){
            $luck = random_int(0,100);

            if($luck>=$hero->luck){  
                $hp= $enemy->def-$hero->atq;

                if($hp<0){
                    $enemyHp+=$hp;
                }
                if($enemyHp>0){
                    $ev=[
                        "winner"=>"hero",
                        "text"=>"{$hero->name} hizo un daño de {$hp} a {$enemy->name}"
                    ];
                }else{
                    $ev=[
                        "winner"=>"hero",
                        "text"=>"{$hero->name} ha debilitado a {$enemy->name} y ganó {$enemy->xp} puntos de experiencia"
                    ];

                    $hero->xp+= $enemy->xp;
                    if($hero->xp>=$hero->level->xp){
                        $hero->xp= $hero->xp-$hero->level->xp;
                        $hero->level_id+=1;
                        $hero->hp+=random_int($hero->level->stat/2,$hero->level->stat);
                        $hero->atq+=random_int($hero->level->stat/2,$hero->level->stat);
                        $hero->def+=random_int($hero->level->stat/2,$hero->level->stat);
                        $hero->luck+=random_int($hero->level->stat/2,$hero->level->stat);
                        $hero->coins+=random_int($hero->level->stat/2,$hero->level->stat);
                        
                    }
                    
                    $hero->save();
                }

                

            }else{
                $hp = $hero->def-$enemy->atq;
                if($hp<0){
                    $heroHp+=$hp;
                }
                if($heroHp>0){
                    $ev=[
                        "winner"=>"enemy",
                        "text"=>"{$enemy->name} hizo un daño de {$hp} a {$hero->name}"
                    ];
                }else{
                    $ev=[
                        "winner"=>"enemy",
                        "text"=>"{$enemy->name} ha debilitado a {$hero->name}"
                    ];
                }
            }
            array_push($events,$ev);
        }
        return  ['events'=>$events,
        'hero'=>$hero->name,
        'enemy'=>$enemy->name,
        'heroAvatar'=>$hero->img_path,
        'enemyAvatar'=>$enemy->img_path
        ];
    }



    public function runManualBattle($heroId,$enemyId){
        $hero=hero::find($heroId);
        $enemy=enemy::find($enemyId);

        $heroHp= $hero->hp;
        $enemyHp= $enemy->hp;
        $luck = random_int(0,100);

            if($luck>=$hero->luck){  
                $hp= $enemy->def-$hero->atq;

                if($hp<0){
                    $enemyHp+=$hp;
                }
                if($enemyHp>0){
                    return[
                        "winner"=>"hero",
                        "text"=>"{$hero->name} hizo un daño de {$hp} a {$enemy->name}"
                    ];
                }else{
                    return[
                        "winner"=>"hero",
                        "text"=>"{$hero->name} ha debilitado a {$enemy->name} y ganó {$enemy->xp} puntos de experiencia"
                    ];

                    $hero->xp+= $enemy->xp;
                    if($hero->xp>=$hero->level->xp){
                        $hero->xp= $hero->xp-$hero->level->xp;
                        $hero->level_id+=1;
                        $hero->hp+=random_int($hero->level->stat/2,$hero->level->stat);
                        $hero->atq+=random_int($hero->level->stat/2,$hero->level->stat);
                        $hero->def+=random_int($hero->level->stat/2,$hero->level->stat);
                        $hero->luck+=random_int($hero->level->stat/2,$hero->level->stat);
                        $hero->coins+=random_int($hero->level->stat/2,$hero->level->stat);

                    }
                    
                    $hero->save();
                }

                

            }else{
                $hp = $hero->def-$enemy->atq;
                if($hp<0){
                    $heroHp+=$hp;
                }
                if($heroHp>0){
                    return[
                        "winner"=>"enemy",
                        "text"=>"{$enemy->name} hizo un daño de {$hp} a {$hero->name}"
                    ];
                }else{
                    return[
                        "winner"=>"enemy",
                        "text"=>"{$enemy->name} ha debilitado a {$hero->name}"
                    ];
                }
            }
        
        }
    
    //public function runAutoBattle

        
    
}