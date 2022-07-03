@extends('layouts.plantilla2')

@section('plantilla2')



@section('plantilla2')

<br>
<center>

    <h1> Cursos</h1>
    <br>
 <a class="btn btn-primary" href="/cursos/create">agregar cursos</a>
<br>
</center>

</head>
<body>

<table id="customers">
<thead>
        <tr>
        <th>Nombre</th>
        <th>Duración</th>
        <th>Fecha de Inicio</th>
        <th>Fecha  final</th>
        <th>Descripción</th>
        <th>Estatus</th>
        
        <th>Editar</th>
        <th>Eliminar</th>
        </tr>
    </thead>
  <tbody>
    <tbody>
        @foreach ($cursos as $curso)

        <tr>

            <td>{{$curso->nombre}}</td>
            <td>{{$curso->duracion}} Modulos</td>
            <td>{{$curso->f_inicio}}</td>
            <td>{{$curso->f_fin}}</td>
            <td>{{$curso->descripcion}}</td>
            <td>{{$curso->status}}</td>
            

            <form action="{{route ('cursos.destroy',$curso->id)}}" method="POST">
@csrf
            <td><a class="btn btn-info" href="/cursos/{{$curso->id}}/edit">Editar</a> </td>
            
            @method('DELETE')
            <td> <button type="submit" class="btn btn-danger" >Eliminar</button> </td>

        </form>
        </tr>

        @endforeach


    </tbody>
  </tbody>
</table>




@endsection
