<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hero extends Model
{
    protected $table="heroes";
    /*foreach($heroes as $hero){
        echo "{$hero->hp} <br>";
    }*/
    
    use HasFactory;
    public function level(){
        return $this->hasOne("App\Models\Level",'id','level_id');
    }
}
