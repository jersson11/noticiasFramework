<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text">Ingrese su correo electronico personal</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">titulo Noticia</label>
    <input type="text" class="form-control" id="exampleInputPassword1"required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Cuerpo noticia</label>
    <input type="text" class="form-control" id="exampleInputPassword1"required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">deatalles a resaltar</label>
    <input type="text" class="form-control" id="exampleInputPassword1"required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">fecha de la noticia</label>
    <input type="date" class="form-control" id="exampleInputPassword1"required>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1"required>
    <label class="form-check-label" for="exampleCheck1">terminos y condiciones</label>
  </div>
  <a type="submit" class="btn btn-primary" href="<?php echo base_url(); ?>/nuevaNoticia">>enviar</a>
</form>