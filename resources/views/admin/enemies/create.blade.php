@extends('layouts.app')
@section('content')

    <h2>Crear nuevo Enemigo</h2>
    <form action="{{Route('enemies.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.form')
        <div class="form-group">
            <label for="coins">Monedas</label>
            <input type="number" class="form-control" id="coins" name="coins" placeholder="Ingrese las monedas"required>
        </div>
        <div class="form-group">
            <label for="xp">Xp</label>
            <input type="number" class="form-control" id="xp" name="xp" placeholder="Ingrese las monedas"required>
        </div>

        <div class="form-group">
            <label for="img_path">Imagen</label>
            <input type="file" class="form-control" name="img_path" id="img_path">
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
    
    
@endsection