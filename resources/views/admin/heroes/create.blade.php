@extends('layouts.app')
@section('content')

    <h2>Crear nuevo heroe</h2>
    <form action="{{Route('heroes.store')}}" method="POST" enctype="multipart/form-data">
        @include('admin.form')
        <div class="form-group">
            <label for="coins">Monedas</label>
            <input type="number" class="form-control" id="coins" name="coins" @isset($hero)value="{{$hero->coins}}" @endisset  placeholder="Ingrese las monedas"required>
        </div>
        
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
    
    
@endsection