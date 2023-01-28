@extends('layouts.app')

@section('content')
    <div class="row">
        <h1>Administrador de Hero</h1>
    </div>
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Entidad</th>
                    <th>Cantidad de Elementos</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($report as $entity)
                    <tr>
                        <td>{{$entity['name']}}</td>
                        <td>{{$entity['counter']}}</td>
                        <td>
                            <a href="{{$entity['route']}}" class="btn btn-warning">Ir a {{$entity['name']}}</a></td>
                    </tr>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
    
@endsection