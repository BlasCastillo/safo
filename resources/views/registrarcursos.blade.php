@extends('layouts.plantilla2')



@section('plantilla1')
<form class="row g-3" action="cursos">
  <div class="col-md-4">
    <label for="validationServerUsername" class="form-label">Nombre</label>
    <input type="text" class="form-control " id="validationServer01" value="" required>
    <div class="valid-feedback">
      Validado!
    </div>
  </div>
  <div class="col-md-4">
  <label for="validationServer04" class="form-label">Docente</label>
    <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
      <option selected disabled value="">DOcente...</option>
      <option>Blas Castillo</option>
      <option>Luis Castillo</option>
      <option>Daimar Carrillo</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="validationServerUsername" class="form-label">Duración</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend3">Modulos</span>
      <input type="number" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
      <div id="validationServerUsernameFeedback" class="valid-feedback">
       Indique la cantidad de Modulos
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationServer03" class="form-label">Dirección</label>
    <input type="Date" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
    <div id="validationServer03Feedback" class="invalid-feedback">
      Fecha de Inicio
    </div>
  </div>
  <div class="col-md-3">
  <label for="validationServer03" class="form-label">Dirección</label>
    <input type="Date" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
    <div id="validationServer03Feedback" class="invalid-feedback">
      Fecha Final
    </select>
    
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


