@extends('layouts.plantilla2')



@section('plantilla1')
<form class="row g-3" action="persona">
  <div class="col-md-4">
    <label for="validationServerUsername" class="form-label">Nombre</label>
    <input type="text" class="form-control " id="validationServer01" value="" required>
    <div class="valid-feedback">
      Validado!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Apellido</label>
    <input type="text" class="form-control " id="validationServer02" value="" required>
    <div class="valid-feedback">
      Validado!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServerUsername" class="form-label">teléfono</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend3">04</span>
      <input type="number" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
      <div id="validationServerUsernameFeedback" class="valid-feedback">
       indique su número de telefono.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationServer03" class="form-label">Dirección</label>
    <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
    <div id="validationServer03Feedback" class="invalid-feedback">
      por favor indique una dirección valida.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationServer04" class="form-label">estado</label>
    <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
      <option selected disabled value="">Estado...</option>
      <option>Yaracuy</option>
      <option>Carabobo</option>
      <option>Lara</option>
    </select>
    <div id="validationServer04Feedback" class="invalid-feedback">
      Please select a valid state.
      <label for="validationServer04" class="form-label">Rol</label>
    <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
      <option selected disabled value="">Rol...</option>
      <option>Usuario</option>
      <option>Docente</option>
      <option>Analista</option>
      <option>Administrador</option>
    </select>
    <div id="validationServer04Feedback" class="invalid-feedback">
      Please select a valid state.
    </div>
    </div>
    <div class="col-md-3">
  
  </div>
  
  </div>
  <div class="col-12">
    
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar</button>
  </div>
</form>
@endsection


