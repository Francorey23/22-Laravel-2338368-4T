@extends('Template.Template')
@section('plantillaweb')
<h2>Registro de materias</h2>
<form action="{{route('materias.store')}}" method="post">
    <!-- csrf_field es un metodo de autenticacion token -->
    {{ csrf_field() }}
    <div class="container">
        <div class="row">
          
            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Nombre de la materia: </label>
            <input type="text" name="nombre">
          </div>
          
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Creditos por la materia: </label>
            <input type="text" name="creditos">
          </div>
          
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Costo: </label>
            <input type="text" name="costo">
          </div>

        </div>
      </div>
    <input type="submit" name="btn_enviar" value="Aceptar">
</form>
@endsection