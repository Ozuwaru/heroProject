<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\enemy;

class enemiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enemies= enemy::all();

        return view('admin.enemies.index',['enemies'=>$enemies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.enemies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function saveEnemy(Request $request,$id){
        if($id){
            $enemy= enemy::find($id);
        }else{
            $enemy= new enemy();
        }
        $enemy->name= $request->input('name');
        $enemy->hp= $request->input('hp');
        $enemy->atq= $request->input('atq');
        $enemy->def= $request->input('def');
        $enemy->luck= $request->input('luck');
        $enemy->coins= $request->input('coins');
        $enemy->xp= $request->input('xp');

        $enemy->save();
        return redirect()->route('enemies.index');
    }
    public function store(Request $request)
    {
        return $this->saveEnemy($request,null);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enemy= enemy::find($id);
        return view('admin.enemies.edit',['enemy'=>$enemy]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $this->saveEnemy($request,$id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enemy= enemy::find($id);
        $enemy->delete();
        return redirect()->route('enemies.index');


        
    }
}
