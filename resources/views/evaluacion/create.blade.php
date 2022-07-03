@extends('layouts.plantilla2')

@section('plantilla1')


<!-- Icons font CSS-->
<link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet')}}" media="all">
<link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
<!-- Font special for pages-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

<!-- Vendor CSS-->
<link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
<link href="{{asset('vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

<!-- Main CSS-->
<link href="{{asset('css/main.css')}}" rel="stylesheet" media="all">
</head>




        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title">Agregar Examen</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="/curso" autocomplete="off">
                    @csrf
                    <div class="form-row m-b-55">
                        <div class="name">Datos</div>
                        <div class="value">
                            <div class="row row-space">
                                <div class="col-3">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="text"  autocomplete="off" name="nombre" id="nombre">
                                        <label for="nombre" class="label--desc" >Nombre</label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="text" name="docente" id="docente">
                                        <label class="label--desc">Docente</label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="text"  autocomplete="off" name="cedula" id="cedula">
                                        <label for="nombre" class="label--desc" >Modulos</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row m-b-55">
                        <div class="name">Duracion</div>
                        <div class="value">
                            <div class="row row-space">
                                <div class="col-6">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="date"  autocomplete="off" name="f_inicio" id="f_inicio">
                                        <label for="nombre" class="label--desc" >Fecha de inicio</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="date" name="f_fin" id="f_fin">
                                        <label class="label--desc">Fecha de fin</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="/curso" class="btn btn-info">Volver</a>
                        <button class="btn btn--radius-2 btn--red" type="submit">Guardar</button>
                    </div>
                </form>
            </div>
        </div>



<!-- Jquery JS-->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<!-- Vendor JS-->
<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
<script src="{{asset('vendor/datepicker/moment.min.js')}}"></script>
<script src="{{asset('vendor/datepicker/daterangepicker.js')}}"></script>

<!-- Main JS-->
<script src="{{asset('js/global.js')}}"></script>







@endsection
