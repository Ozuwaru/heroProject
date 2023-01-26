@extends('layouts.app')
@section('content')

    <h2>Crear nuevo Item</h2>
    <form action="{{Route('items.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name"  placeholder="Ingrese un nombre" required>
        </div>
        <div class="form-group">
            <label for="hp">HP</label>
            <input type="number" class="form-control" id="hp" name="hp" placeholder="Ingrese la vida"required>
        </div>
        <div class="form-group">
            <label for="atq">Ataque</label>
            <input type="number" class="form-control" id="atq"name="atq"  placeholder="Ingrese el ataque"required>
        </div>
        <div class="form-group">
            <label for="def">Defensa</label>
            <input type="number" class="form-control" id="def"name="def"  placeholder="Ingrese la defensa"required>
        </div>
        <div class="form-group">
            <label for="luck">Suerte</label>
            <input type="number" class="form-control" id="luck" name="luck" placeholder="Ingrese la suerte"required>
        </div>
        <div class="form-group">
            <label for="cost">Coste</label>
            <input type="number" class="form-control" id="cost" name="cost" placeholder="Ingrese las monedas"required>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
    
    
@endsection