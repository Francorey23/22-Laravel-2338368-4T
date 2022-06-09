@extends('Template.Template')
@section('plantillaweb')
<h2>Edicion del profesor No. {{$subject->id}}</h2>
<form action="{{route('materias.update', $subject)}}" method="post">
    <!-- csrf_field es un metodo de autenticacion token -->
    @method('PUT')
    {{ csrf_field() }}
    <div class="container">
        <div class="row">
          
            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Nombres: </label>
            <input type="text" name="nombre" value="{{$subject->nombre}}">
          </div>
          
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Apellidos: </label>
            <input type="text" name="creditos" value="{{$subject->creditos}}">
          </div>
          
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Dirección: </label>
            <input type="text" name="costo" value="{{$subject->costo}}">
          </div>

        </div>
      </div>
    <input type="submit" name="btn_enviar" value="Aceptar">
</form>
@endsection