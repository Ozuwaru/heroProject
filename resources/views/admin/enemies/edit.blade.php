@extends('layouts.app')
@section('content')

    <h2>Editar Enemigo - {{$enemy->name}}</h2>
    <form action="{{Route('enemies.update',['enemy'=>$enemy->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$enemy->name}}"  placeholder="Ingrese un nombre" required>
        </div>
        <div class="form-group">
            <label for="hp">HP</label>
            <input type="number" class="form-control" id="hp" name="hp"value="{{$enemy->hp}}" placeholder="Ingrese la vida"required>
        </div>
        <div class="form-group">
            <label for="atq">Ataque</label>
            <input type="number" class="form-control" id="atq"name="atq" value="{{$enemy->atq}}" placeholder="Ingrese el ataque"required>
        </div>
        <div class="form-group">
            <label for="def">Defensa</label>
            <input type="number" class="form-control" id="def"name="def" value="{{$enemy->def}}"  placeholder="Ingrese la defensa"required>
        </div>
        <div class="form-group">
            <label for="luck">Suerte</label>
            <input type="number" class="form-control" id="luck" name="luck" value="{{$enemy->luck}}" placeholder="Ingrese la suerte"required>
        </div>
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