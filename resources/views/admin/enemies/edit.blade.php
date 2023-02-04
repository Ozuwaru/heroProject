@extends('layouts.app')
@section('content')

    <h2>Editar Enemigo - {{$enemy->name}}</h2>
    <form action="{{Route('enemies.update',['enemy'=>$enemy->id])}}" method="post" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <?php
            $entity= $enemy;
        ?>
        @include('admin.form')
        

        <div class="form-group">
            <label for="coins">Monedas</label>
            <input type="number" class="form-control" id="coins" name="coins" value="{{$enemy->coins}}" placeholder="Ingrese las monedas"required>
        </div>
        <div class="form-group">
            <label for="xp">Xp</label>
            <input type="number" class="form-control" id="xp" name="xp" value="{{$enemy->xp}}" placeholder="Ingrese las monedas"required>
        </div>

        <button type="submit" class="btn btn-warning">editar</button>
    </form>
    
    
@endsection