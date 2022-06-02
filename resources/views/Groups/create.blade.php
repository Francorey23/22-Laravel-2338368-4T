@extends('Template.Template')
@section('plantillaweb')
<h2>Registro de grupos</h2>
<form action="{{route('grupos.store')}}" method="post">
    <!-- csrf_field es un metodo de autenticacion token -->
    {{ csrf_field() }}
    <div class="container">
        <div class="row">
          
            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Año: </label>
            <input type="text" name="anio">
          </div>
          
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Periodo académico: </label>
            <input type="text" name="periodo">
          </div>
          
          <div class="col-lg-6 col-md-4 col-sm-2">
            <select class="form-select" name="teacher_id">
                <option selected="true" disabled="disabled">Profesores</option>
                @foreach ($teachers as $teacher)
                 <option value="{{$teacher->id}}">{{$teacher->nombres}} {{$teacher->apellidos}}</option>
                @endforeach
              </select>
          </div>
          

        </div>
      </div>
    <input type="submit" name="btn_enviar" value="Aceptar">
</form>
@endsection