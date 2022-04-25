@extends('layouts.plantilla2')

@section('plantilla2')



@section('plantilla1')

<br>
<center>
    
    <h1> Cursos</h1>
    <br>
 <a class="btn btn-primary" href="registrarcursos">agregar cursos</a>
<br>
</center>

</head>
<body>



<table id="customers">
  <tr>
    <th>Nombre</th>
    <th>Docente</th>
    <th>Duración</th>
    <th>Inicio</th>
    <th>Fin</th>
    <th>Editar</th>
    <th>Eliminar</th>
  </tr>
  <tr>
    <td>Oratoria</td>
    <td>Blas Castillo</td>
    <td>7 modulos</td>
    <td>01/05/2022</td>
    <td>15/06/2022</td>
    <td><button type="button" class="btn btn-success">Editar</button></td>
    <td><button type="button" class="btn btn-danger">Eliminar</button></td>
  </tr>
  <tr>
    <td>agricultura</td>
    <td>Luis Castillo</td>
    <td>4 Modulos</td>
    <td>01/05/2022</td>
    <td>15/06/2022</td>
    <td><button type="button" class="btn btn-success">Editar</button></td>
    <td><button type="button" class="btn btn-danger">Eliminar</button></td>
  </tr>
  
  <tr>
    <td>Diseño web</td>
    <td>Sevilla</td>
    <td>4 Modulos</td>
    <td>01/05/2022</td>
    <td>15/06/2022</td>
    <td><button type="button" class="btn btn-success">Editar</button></td>
    <td><button type="button" class="btn btn-danger">Eliminar</button></td>
  </tr>
  
  <tr>
    <td>Barberia</td>
    <td>Daymar Carrillo</td>
    <td>4 Modulos</td>
    <td>01/05/2022</td>
    <td>15/06/2022</td>
    <td><button type="button" class="btn btn-success">Editar</button></td>
    <td><button type="button" class="btn btn-danger">Eliminar</button></td>
  </tr>
  
  
</table>


@endsection
