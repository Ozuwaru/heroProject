@extends('layouts.app')
@section('content')

    <h2>Editar heroe - {{$hero->name}}</h2>
    <form action="{{Route('heroes.update',['hero'=>$hero->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$hero->name}}"  placeholder="Ingrese un nombre" required>
        </div>
        <div class="form-group">
            <label for="hp">HP</label>
            <input type="number" class="form-control" id="hp" name="hp"value="{{$hero->hp}}" placeholder="Ingrese la vida"required>
        </div>
        <div class="form-group">
            <label for="atq">Ataque</label>
            <input type="number" class="form-control" id="atq"name="atq" value="{{$hero->atq}}" placeholder="Ingrese el ataque"required>
        </div>
        <div class="form-group">
            <label for="def">Defensa</label>
            <input type="number" class="form-control" id="def"name="def" value="{{$hero->def}}"  placeholder="Ingrese la defensa"required>
        </div>
        <div class="form-group">
            <label for="luck">Suerte</label>
            <input type="number" class="form-control" id="luck" name="luck" value="{{$hero->luck}}" placeholder="Ingrese la suerte"required>
        </div>
        <div class="form-group">
            <label for="coins">Monedas</label>
            <input type="number" class="form-control" id="coins" name="coins" value="{{$hero->coins}}" placeholder="Ingrese las monedas"required>
        </div>
        <button type="submit" class="btn btn-warning">editar</button>
    </form>
    
    
@endsection