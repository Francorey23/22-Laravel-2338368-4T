@extends('Template.Template')
@section('plantillaweb')
<h2>Listado de Materias</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Creditos</th>
        <th scope="col">Precio</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach ($subjects as $subject)
        <tr>
            <th scope="row">{{$subject->id}}</th>
            <td>{{$subject->nombre}}</td>
            <td>{{$subject->creditos}}</td>
            <td>{{$subject->costo}}</td>
            <td>
              <a href="{{route('materias.edit', $subject->id)}}" class="btn btn-warning btn-sm" role="button" aria-disabled="true">Editar</a>
            </td>
            <td>
              <form action="{{route('materias.destroy', $subject->id)}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm" >Eliminar</button>  
              </form>
            </td>  
            </td>
        </tr>      
        @endforeach
    </tbody>
  </table>
  {{$subjects->links()}}
@endsection 