@extends('layouts.plantilla1')

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
                <h2 class="title">Actualizar Perfil</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="/personas/{{$persona->id}}" autocomplete="off">
                    @csrf
                    @method('PUT')
                    <div class="form-row m-b-55">
                        <div class="name">Nombre</div>
                        <div class="value">
                            <div class="row row-space">
                                <div class="col-3">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="text"  autocomplete="off" name="nombre" id="nombre" value="{{$persona->nombre}}">
                                        <label for="nombre" class="label--desc" >Nombre</label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="text" name="apellido" id="apellido"value="{{$persona->apellido}}">
                                        <label class="label--desc">Apellido</label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="text"  autocomplete="off" name="cedula" id="cedula" value="{{$persona->cedula}}">
                                        <label for="nombre" class="label--desc" >Cédula</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row m-b-55">
                        <div class="name">Ubicación</div>
                        <div class="value">
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="text"  autocomplete="off" name="estado" id="estado" value="{{$persona->estado}}">
                                        <label for="nombre" class="label--desc" >estado</label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="text" name="municipio" id="municipio" value="{{$persona->municipio}}">
                                        <label class="label--desc">municipio</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Dirección</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" name="direccion" id="direccion" value="{{$persona->direccion}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Email</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="email" name="correo" id="correo" value="{{$persona->correo}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row m-b-55">
                        <div class="name">Teléfono</div>
                        <div class="value">
                            <div class="row row-refine">
                                <div class="col-3">
                                    <div class="value">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="operador" name="operador" value="{{$persona->operador}}">
                                                    <option disabled="disabled" id="operador"  selected="selected">operador</option>
                                                    <option value="0412">0412</option>
                                                    <option value="0414">0414</option>
                                                    <option value="0416">0416</option>
                                                    <option value="0424">0424</option>
                                                    <option value="0426">0426</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-4">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="text" name="telefono" id="telefono"value="{{$persona->telefono}}">
                                        <label class="label--desc">Número de teléfono</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="text" hidden  autocomplete="off" value="1" name="rol" id="rol" value="{{$persona->rol}}">
                                        <label class="label--desc"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="/personas" class="btn btn-info">Volver</a>
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
