@extends('layouts.plantilla1')

@section('plantilla1')

<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
      <div class="imagen"><img class="img-fluid" src="{{ asset('img/logosafo.JPG') }}" alt="mi foto"></div>
          
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        
        <form action="#" id="form">

           <!-- nombre input -->
           <div class="form-outline mb-4">
            <input  value="" type="yext" id="nombre" class="form-control form-control-lg"
              placeholder="Ingrese su nombre" />
            <label for="nombre"  class="form-label" >Nombre</label>
            <div class="valid-feedback">
      Looks good!
    </div>
     <!-- apellido input -->
     <div class="form-outline mb-4">
            <input  value="" type="text" id="apellido" class="form-control form-control-lg"
              placeholder="Ingrese su apellido" />
            <label for="apellido"  class="form-label" >Apellido</label>
            <div class="valid-feedback">
      Looks good!
    </div>
 <!-- Email cedula -->
 <div class="form-outline mb-4">
            <input  value="" type="number" id="cedula" class="form-control form-control-lg"
              placeholder="Ingresesu n° de cédula" />
            <label for="cedula"  class="form-label" >Cédula</label>
            <div class="valid-feedback">
      Looks good!
    </div>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input  value="" type="email" id="correo" class="form-control form-control-lg"
              placeholder="Ingrese un correo electrónico" />
            <label for="correo"  class="form-label" >Correo</label>
            <div class="valid-feedback">
      Looks good!
    </div>
          </div>
          <!-- operador input -->

          <select class="form-select" aria-label="Default select example">
            <option selected>operador</option>
            <option value="1">0412</option>
            <option value="2">0424</option>
            <option value="3">0414</option>
            <option value="4">0416</option>
            <option value="5">026</option>
            
</select>

          <!-- telefono input -->
          <div class="form-outline mb-4">
            <input  value="" type="number" id="telefono" class="form-control form-control-lg"
              placeholder="Ingrese su n° de teléfono" />
            <label for="telefono"  class="form-label" >Teléfono</label>
            <div class="valid-feedback">
      Looks good!
    </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="clave" class="form-control form-control-lg"
              placeholder="Ingrese su contraseña" />
            <label class="form-label" for="clave">Clave</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
           <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="clave" class="form-control form-control-lg"
              placeholder="Repita su contraseña" />
            <label class="form-label" for="clave">repetir contraseña</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Registrar</button>
            
          </div>
          </form>

        </form>
      </div>
    </div>
  </div>
  
</section>

@endsection