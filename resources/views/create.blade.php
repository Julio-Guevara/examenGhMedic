@extends('home')
@section('contenido')
<div style="margin: auto;width: 50%;border: 1px solid green;padding: 10px;">

    <form action="/empleado" method="POST">
        @csrf
      <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">    
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Edad</label>
        <input id="edad" name="edad" type="text" class="form-control" tabindex="2">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Departamento</label>
        <select class="form-select" aria-label="Departamento" name="id_departamento">
            <option selected value="null">Seleccione un departamento</option>
            @foreach ($departamentos as $departamento)
                <option value="{{$departamento->id}}">{{$departamento->nombre}}</option>
            @endforeach
        </select>
      </div>
      <div class="mb-3">
        <a href="/empleado" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Crear Empleado</button>
    </div>
    </form>
</div>
@endsection