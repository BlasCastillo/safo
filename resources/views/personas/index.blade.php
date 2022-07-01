@extends('layouts.plantilla1')

@section('plantilla1')
<br>
<a href="/personas/create" class="btn btn-primary"> Crear Persona</a>
<table id="customers">
    <thead>
        <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Cédula</th>
        <th>Operador</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>Estado</th>
        <th>Municipio</th>
        <th>Dirección</th>
        <th>Rol</th>
        <th>Editar</th>
        <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($personas as $persona)

        <tr>
            
            <td>{{$persona->nombre}}</td>
            <td>{{$persona->apellido}}</td>
            <td>{{$persona->cedula}}</td>
            <td>{{$persona->operador}}</td>
            <td>{{$persona->telefono}}</td>
            <td>{{$persona->correo}}</td>
            <td>{{$persona->estado}}</td>
            <td>{{$persona->municipio}}</td>
            <td>{{$persona->direccion}}</td>
            <td>{{$persona->rol}}</td>

            <form action="{{route ('personas.destroy',$persona->id)}}" method="POST">

            <td><a class="btn btn-info" href="/personas/{{$persona->id}}/edit">Editar</a> </td>
            @csrf
            @method('DELETE')
            <td> <button type="submit" class="btn btn-danger" >Eliminar</button> </td>
        
        </form>
        </tr>
            
        @endforeach


    </tbody>
</table>

@endsection