@extends('layouts.app')
@section('content')

    <h2>Editar item - <?php echo $item->name?></h2>
    <form action="{{Route('items.update',['item'=>$item->id])}}" method="post">
        @csrf
        @method('PUT')
        <?php
            $entity= $item;
        ?>
        @include('admin.form')

        <div class="form-group">
            <label for="cost">Monedas</label>
            <input type="number" class="form-control" id="cost" name="cost" value="{{$item->cost}}" placeholder="Ingrese las monedas"required>
        </div>
        <button type="submit" class="btn btn-warning">editar</button>
    </form>
    
    
@endsection