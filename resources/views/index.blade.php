@extends('home')
@section('contenido')
<div style="margin: auto;width: 70%;padding: 10px;">
    <a href="/empleado/create" class="btn btn-primary">Crear Empleado</a>
    <a href="/paises" class="btn btn-secondary">Países</a>
</div>
<div style="margin: auto;width: 70%;border: 1px solid green;padding: 10px;">
    <table id="empleados" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Departamento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
            <tr>
                <td>{{$empleado->id}}</td>
                <td>{{$empleado->nombre}}</td>
                <td>{{$empleado->edad}}</td>
                <td>{{$empleado->nombre_departamento}}</td>
                <td>
                    <form action="{{ route('empleado.destroy',$empleado->id) }}" method="POST">
                      <a href="/empleado/{{$empleado->id}}/edit" class="btn btn-info">Editar</a>         
                          @csrf
                          @method('DELETE')
                      <button type="submit" class="btn btn-danger">Eliminar</button>
                     </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection