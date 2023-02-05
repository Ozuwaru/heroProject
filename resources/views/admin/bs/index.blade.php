@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col text-center">
            <h1>Sistema de batalla</h1>
        </div>
        
    </div>
    <div class="row text-center text-white mt-2">
        <div class="col-5 bg-primary">
            <h2>{{$hero}}</h2>
            
        </div>
        <div class="col bg-warning text-dark ">
            <h2>VS</h2>
        </div>
        <div class="col-5 bg-danger">
            <h2>{{$enemy}}</h2>
            
        </div>
    </div>

    <div class="row text-center text-white mt-2">
        <div class="col-5 bg-primary">
            <img src="{{asset('images/heroes/'.$heroAvatar)}}" height="100">
            
        </div>
        <div class="col bg-warning text-dark ">
            <h2>VS</h2>
        </div>
        <div class="col-5 bg-danger">
            <img src="{{asset('images/enemies/'.$enemyAvatar)}}" alt="enemigo" height="100">
            
        </div>
    </div>

    <div class="row text-center text-white mt-2 bg-info">
        <h2>Eventos de Batalla</h2>
    </div>

    <div class="mt-3">
        @foreach ($events as $ev)
            <?php
                if($ev['winner']=='hero'){
                    $ev['class']='alert-success';
                }else{
                    $ev['class']='alert-danger';
                }
            ?>

            <div class="alert {{$ev['class']}}" role="alert">
                {{ $ev['text'] }}
            </div>
        @endforeach
       

    </div>
    
@endsection 