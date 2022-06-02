@extends('Template.Template')
@section('plantillaweb')
<h2>Registro de profesores</h2>
<form action="{{route('profesores.store')}}" method="post">
    <!-- csrf_field es un metodo de autenticacion token -->
    {{ csrf_field() }}
    <div class="container">
        <div class="row">
          
            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Nombres: </label>
            <input type="text" name="nombres">
          </div>
          
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Apellidos: </label>
            <input type="text" name="apellidos">
          </div>
          
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Dirección: </label>
            <input type="text" name="direccion">
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Correo: </label>
            <input type="text" name="correo">
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Celular: </label>
            <input type="number" name="celular">
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <select class="form-select" name="nivel_academico">
                <option selected>Nivel académico</option>
                <option value="1">Bachiller académico y/o comercial</option>
                <option value="2">Tecnico</option>
                <option value="3">Tecnólogo</option>
                <option value="3">Profesional</option>
                <option value="3">Magister</option>
                <option value="3">Doctorado</option>
              </select>
          </div>

          
        </div>
      </div>
    <input type="submit" name="btn_enviar" value="Aceptar">
</form>
@endsection