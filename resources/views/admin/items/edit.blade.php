@extends('layouts.app')
@section('content')

    <h2>Editar item - <?php echo $item->name?></h2>
    <form action="{{Route('items.update',['item'=>$item->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$item->name}}"  placeholder="Ingrese un nombre" required>
        </div>
        <div class="form-group">
            <label for="hp">HP</label>
            <input type="number" class="form-control" id="hp" name="hp"value="{{$item->hp}}" placeholder="Ingrese la vida"required>
        </div>
        <div class="form-group">
            <label for="atq">Ataque</label>
            <input type="number" class="form-control" id="atq"name="atq" value="{{$item->atq}}" placeholder="Ingrese el ataque"required>
        </div>
        <div class="form-group">
            <label for="def">Defensa</label>
            <input type="number" class="form-control" id="def"name="def" value="{{$item->def}}"  placeholder="Ingrese la defensa"required>
        </div>
        <div class="form-group">
            <label for="luck">Suerte</label>
            <input type="number" class="form-control" id="luck" name="luck" value="{{$item->luck}}" placeholder="Ingrese la suerte"required>
        </div>
        <div class="form-group">
            <label for="cost">Monedas</label>
            <input type="number" class="form-control" id="cost" name="cost" value="{{$item->cost}}" placeholder="Ingrese las monedas"required>
        </div>
        <button type="submit" class="btn btn-warning">editar</button>
    </form>
    
    
@endsection