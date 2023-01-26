@extends('layouts.app')
@section('content')
    <h2>Lista de Heroes</h2>
    <a href="{{route('heroes.create')}}" class="btn btn-primary mb-2 mt-2">Crear</a>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">hp</th>
            <th scope="col">atq</th>
            <th scope="col">def</th>
            <th scope="col">luck</th>
            <th scope="col">coins</th>
            <th scope="col">xp</th>
            <th scope="col">Acciones</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($heroes as $hero)
            
            <tr>
                <th scope="row">{{$hero->id}}</th>
                <td>{{$hero->name}}</td>
                <td>{{$hero->hp}}</td>
                <td>{{$hero->atq}}</td>
                <td>{{$hero->def}}</td>
                <td>{{$hero->luck}}</td>
                <td>{{$hero->coins}}</td>
                <td>{{$hero->xp}}</td>
                <td>

                  <div class="row g-0">
                    <div class="col">
                     <a href="{{route('heroes.edit',['hero'=>$hero->id])}}" class="btn btn-warning" value >Modificar</a>
                      
                    </div>
                    <div class="col">
                      <form action="{{route('heroes.destroy',['hero'=>$hero->id])}}" method="post">
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