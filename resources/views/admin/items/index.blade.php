@extends('layouts.app')

@section('content')
    <h1>Items</h1>
    <a href="{{route('items.create')}}" class="btn btn-primary mb-2 mt-2">Crear</a>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">hp</th>
            <th scope="col">atq</th>
            <th scope="col">def</th>
            <th scope="col">luck</th>
            <th scope="col">Cost</th>
            <th scope="col">Acciones</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->hp}}</td>
                <td>{{$item->atq}}</td>
                <td>{{$item->def}}</td>
                <td>{{$item->luck}}</td>
                <td>{{$item->cost}}</td>
                <td>

                  <div class="row g-0">
                    <div class="col">
                     <a href="{{route('items.edit',['item'=>$item->id])}}" class="btn btn-warning" value >Modificar</a>
                      
                    </div>
                    <div class="col">
                      <form action="{{route('items.destroy',['item'=>$item->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Borrar</button>
                      </form>
                         
                    </div>
                  </div>

                  
                </td>

            </tr>
            @endforeach
          
         
        </tbody>
      </table>
@endsection