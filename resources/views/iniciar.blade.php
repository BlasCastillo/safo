@extends('layouts.plantilla1')

@section('plantilla1')

<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
      <div class="imagen"><img class="img-fluid" src="{{ asset('img/logosafo.JPG') }}" alt="mi foto"></div>
          
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form class="needs-validation" novalidate>
         

          

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input  value="" type="email" id="correo" class="form-control form-control-lg"
              placeholder="Ingrese un correo electrónico" />
            <label for="correo"  class="form-label" >Correo</label>
            <div class="valid-feedback">
      Looks good!
    </div>
          </div>
<form action="#" id="form">
          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="clave" class="form-control form-control-lg"
              placeholder="Ingrese su contraseña" />
            <label class="form-label" for="clave">Clave</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Recordarme
              </label>
            </div>
            
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Iniciar</button>
            
          </div>
          </form>

        </form>
      </div>
    </div>
  </div>
  
</section>

@endsection