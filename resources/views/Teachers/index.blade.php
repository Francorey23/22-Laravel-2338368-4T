@extends('Template.Template')
@section('plantillaweb')
<h2>Listado de profesores</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombres</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Direccion</th>
        <th scope="col">Correo</th>
        <th scope="col">Celular</th>
        <th scope="col">Nivel académico</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($teachers as $teacher)
        <tr>
            <th scope="row">{{$teacher->id}}</th>
            <td>{{$teacher->nombres}}</td>
            <td>{{$teacher->apellidos}}</td>
            <td>{{$teacher->direccion}}</td>
            <td>{{$teacher->correo}}</td>
            <td>{{$teacher->celular}}</td>
            <td>{{$teacher->nivel_academico}}</td>
            <td>
              <a href="{{route('profesores.edit', $teacher->id)}}" class="btn btn-warning btn-sm" role="button" aria-disabled="true">Editar</a>
            </td>
            <td>
              <form action="" method="POST">
                @method('DELETE')
                @csrf
                <a href="{{route('profesores.destroy', $teacher)}}" class="btn btn-danger btn-sm" role="button" aria-disabled="true">Eliminar</a>
              </form>
            </td>  
            </td>
        </tr>      
        @endforeach
    </tbody>
  </table>
  {{$teachers->links()}}
@endsection 