@extends('layouts.app')
@section('content')

    <h2>Crear nuevo Item</h2>
    <form action="{{Route('items.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        @include('admin.form')
        
        <div class="form-group">
            <label for="cost">Coste</label>
            <input type="number" class="form-control" id="cost" name="cost" placeholder="Ingrese las monedas"required>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
    
    
@endsection