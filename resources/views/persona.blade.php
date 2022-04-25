@extends('layouts.plantilla2')

@section('plantilla2')



@section('plantilla1')

<br>
<center>
    
    <h1> Personas</h1>
    <br>
 <a class="btn btn-primary" href="registrarpersona">agregar persona</a>
<br>
</center>

</head>
<body>



<table id="customers">
  <tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Cédula</th>
    <th>Teléfono</th>
    <th>Rol</th>
    <th>Editar</th>
    <th>Eliminar</th>
  </tr>
  <tr>
    <td>Blas</td>
    <td>Castillo</td>
    <td>19063494</td>
    <td>4245937898</td>
    <td>Usuario</td>
    <td><button type="button" class="btn btn-success">Editar</button></td>
    <td><button type="button" class="btn btn-danger">Eliminar</button></td>
  </tr>
  <tr>
    <td>Luis</td>
    <td>Castillo</td>
    <td>26824117</td>
    <td>4125935454</td>
    <td>Docente</td>
    <td><button type="button" class="btn btn-success">Editar</button></td>
    <td><button type="button" class="btn btn-danger">Eliminar</button></td>
  </tr>
  
  <tr>
    <td>Ashley</td>
    <td>Sevilla</td>
    <td>28951057</td>
    <td>4163310326</td>
    <td>Analista</td>
    <td><button type="button" class="btn btn-success">Editar</button></td>
    <td><button type="button" class="btn btn-danger">Eliminar</button></td>
  </tr>
  
  <tr>
    <td>Daymar</td>
    <td>Carrillo</td>
    <td>29546874</td>
    <td>4241458585</td>
    <td>Administrador</td>
    <td><button type="button" class="btn btn-success">Editar</button></td>
    <td><button type="button" class="btn btn-danger">Eliminar</button></td>
  </tr>
  
  
</table>


@endsection
