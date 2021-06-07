@extends('home')
@section('contenido')
<div style="margin: auto;width: 50%;border: 1px solid green;padding: 10px;">

    <form action="/empleado/{{$empleado->id}}" method="POST">
      @csrf    
      @method('PUT')
      <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{$empleado->nombre}}">    
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Edad</label>
        <input id="edad" name="edad" type="text" class="form-control" tabindex="2" value="{{$empleado->edad}}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Departamento</label>
        <select class="form-select" aria-label="Departamento" name="id_departamento">
            @foreach ($departamentos as $departamento)
              @if($departamento->id == $empleado->id_departamento)
                <option selected value="{{$departamento->id}}">{{$departamento->nombre}}</option>
              @else
                <option value="{{$departamento->id}}">{{$departamento->nombre}}</option>
              @endIf
            @endforeach
        </select>
      </div>
      <div class="mb-3">
        <a href="/empleado" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Editar Empleado</button>
    </div>
    </form>
</div>
<script type="text/javascript">
  
</script>
@endsection