<!doctype html>
<html lang="es">
  <head>
    
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{!! asset('css/estilos.css') !!}">
    <link rel="icon" href="{!! asset('img/favicon.jpg') !!}">
    </head>
                                <body oncontextmenu='return false' class='snippet-body'>
                                <body id="body-pd">
    <header class="header" id="header"  > 
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i>  </div>
        <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
      
        
    </header>
    
    <img class="img-fluid " width="100%" src="{{ asset('img/header.JPG') }}" alt="mi foto"><br>
    
    <div class="l-navbar" id="nav-bar">
      <br>
        <nav class="nav">
            <div> <a href="administrador" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Menu Admin</span> </a>
                <div class="nav_list"> <a href="inicio" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Inicio</span> </a> 
                <a href="persona" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Personas</span> </a> 
                <a href="noticias" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Noticias</span> 
              </a> <a href="cursos" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Cursos</span> </a>
               <a href="examenes" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Examenes</span> </a> 
               <a href="estadisticas" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Estadisticas</span> </a> </div>
            </div> <a href="salir#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Salir</span> </a>
        </nav>
    </div>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
   
    <title>SAFO</title>
  </head>
  <body>
  

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{!! asset('js/api1.js') !!}" async></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

   
    @yield('plantilla1')
  </body>
</html>