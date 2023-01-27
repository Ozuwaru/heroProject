@extends('layouts.app')

@section('content')
    <h1>Enemigos</h1>
    <a href="{{route('enemies.create')}}" class="btn btn-primary mb-2 mt-2">Crear</a>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">hp</th>
            <th scope="col">atq</th>
            <th scope="col">def</th>
            <th scope="col">luck</th>
            <th scope="col">Coins</th>
            <th scope="col">xp</th>
            <th scope="col">Acciones</th>


          </tr>
        </thead>
        <tbody>
            @foreach ($enemies as $enemy)
            
            <tr>
                <th scope="row">{{$enemy->id}}</th>
                <td>{{$enemy->name}}</td>
                <td>{{$enemy->hp}}</td>
                <td>{{$enemy->atq}}</td>
                <td>{{$enemy->def}}</td>
                <td>{{$enemy->luck}}</td>
                <td>{{$enemy->coins}}</td>
                <td>{{$enemy->xp}}</td>
                <td>

                  <div class="row g-0">
                    <div class="col">
                     <a href="{{route('enemies.edit',['enemy'=>$enemy->id])}}" class="btn btn-warning" value >Modificar</a>
                      
                    </div>
                    <div class="col">
                      <form action="{{route('enemies.destroy',['enemy'=>$enemy->id])}}" method="post">
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