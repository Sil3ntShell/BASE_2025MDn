<div class="row justify-content-center p-3">
  <div class="col-lg-10">
    <div class="card shadow-lg border-primary border-2" style="border-radius: 15px;">
      <div class="card-body">
        <div class="text-center mb-4">
          <h4 class="text-primary fw-bold">
            <i class="bi bi-person-badge-fill me-2"></i> MANIPULACIÓN DE USUARIOS
          </h4>
          <p class="text-muted">¡Bienvenido! Aquí puedes registrar, modificar y eliminar usuarios fácilmente.</p>
        </div>

        <form id="FormUsuarios">
          <input type="hidden" id="usuario_id" name="usuario_id">

          <div class="row g-4">
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" class="form-control" id="usuario_nombre" name="usuario_nombre" placeholder="Ingrese sus nombres">
                <label for="usuario_nombre">Nombres</label>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" class="form-control" id="usuario_apellido" name="usuario_apellido" placeholder="Ingrese sus apellidos">
                <label for="usuario_apellido">Apellidos</label>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" class="form-control" id="usuario_nit" name="usuario_nit" placeholder="Ingrese su NIT">
                <label for="usuario_nit">NIT</label>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" class="form-control" id="usuario_telefono" name="usuario_telefono" placeholder="Ingrese su teléfono">
                <label for="usuario_telefono">Teléfono</label>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-floating">
                <input type="email" class="form-control" id="usuario_correo" name="usuario_correo" placeholder="ejemplo@email.com">
                <label for="usuario_correo">Correo electrónico</label>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-floating">
                <select name="usuario_estado" id="usuario_estado" class="form-select">
                  <option value="" selected>-- SELECCIONE EL ESTADO --</option>
                  <option value="P">PRESENTE</option>
                  <option value="F">FALTANDO</option>
                  <option value="C">COMISIÓN</option>
                </select>
                <label for="usuario_estado">Estado del Usuario</label>
              </div>
            </div>
          </div>

          <div class="row justify-content-center mt-5">
            <div class="col-auto">
              <button class="btn btn-success btn-lg px-4" type="submit" id="BtnGuardar">
                <i class="bi bi-check-circle-fill me-1"></i> Guardar
              </button>
            </div>

            <div class="col-auto d-none">
              <button class="btn btn-warning btn-lg px-4" type="button" id="BtnModificar">
                <i class="bi bi-pencil-square me-1"></i> Modificar
              </button>
            </div>

            <div class="col-auto">
              <button class="btn btn-secondary btn-lg px-4" type="reset" id="BtnLimpiar">
                <i class="bi bi-eraser-fill me-1"></i> Limpiar
              </button>
              
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<script src="<?= asset('build/js/usuarios/index.js') ?>"></script>