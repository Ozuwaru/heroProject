<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Hero;

use App\Models\item;
use App\Models\enemy;


class AdminController extends Controller
{
    public function index(){
        $heroCounter= hero::count();
        $itemCounter= item::count();
        $enemyCounter= enemy::count();
        $report= [
            ['name'=>"Heroes",'counter'=>$heroCounter,'route'=>route('heroes.index')],
            ['name'=>"Items",'counter'=>$itemCounter,'route'=>route('items.index')],
            ['name'=>"Enemigos",'counter'=>$enemyCounter,'route'=>route('enemies.index')],

        ];

        return view('admin.index',['report'=>$report]);
    }
}
 