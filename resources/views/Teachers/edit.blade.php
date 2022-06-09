@extends('Template.Template')
@section('plantillaweb')
<h2>Edicion del profesor No. {{$teacher->id}}</h2>
<form action="{{route('profesores.update', $teacher)}}" method="post">
    <!-- csrf_field es un metodo de autenticacion token -->
    @method('PUT')
    {{ csrf_field() }}
    <div class="container">
        <div class="row">
          
            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Nombres: </label>
            <input type="text" name="nombres" value="{{$teacher->nombres}}">
          </div>
          
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Apellidos: </label>
            <input type="text" name="apellidos" value="{{$teacher->apellidos}}">
          </div>
          
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Dirección: </label>
            <input type="text" name="direccion" value="{{$teacher->direccion}}">
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Correo: </label>
            <input type="text" name="correo" value="{{$teacher->correo}}">
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Celular: </label>
            <input type="number" name="celular" value="{{$teacher->celular}}">
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Nivel académico: </label>
            <input type="text" disabled="disabled" name="nivel_academico" value="{{$teacher->nivel_academico}}"> 
            <br> 
            <select class="form-select" name="nivel_academico">
                <option selected>Nivel académico</option>
                <option value="1">Bachiller académico y/o comercial</option>
                <option value="2">Tecnico</option>
                <option value="3">Tecnólogo</option>
                <option value="4">Profesional</option>
                <option value="5">Magister</option>
                <option value="6">Doctorado</option>
              </select>
          </div>

          
        </div>
      </div>
    <input type="submit" name="btn_enviar" value="Aceptar">
</form>
@endsection