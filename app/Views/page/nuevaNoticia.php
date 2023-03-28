<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required value="jerssonovalle2@gmail.com">
    <div id="emailHelp" class="form-text">Ingrese su correo electronico personal</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">titulo Noticia</label>
    <input type="text" class="form-control" id="exampleInputPassword1"required value="Nuevas tecnologias">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Cuerpo noticia</label>
    <input type="text" class="form-control" id="exampleInputPassword1"required value="El ministerio de las TICS apoyara estudiantes de bajos recursos para estudiar tecnologias ">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">deatalles a resaltar</label>
    <input type="text" class="form-control" id="exampleInputPassword1"required value="Este evento no se desarrollaba desde antes de la pandemia">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">fecha de la noticia</label>
    <input type="date" class="form-control" id="exampleInputPassword1"required value="11/09/2022">
  </div>
  
  <a type="submit" class="btn btn-primary" href="<?php echo base_url(); ?>/formulario">Crear Nueva Noticia</a>
</form>