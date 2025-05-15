<div class="container mt-5">
  <h2 class="mb-4">Registro de Usuario</h2>
  <form action="guardar_usuario.php" method="POST">
    <div class="mb-3">
      <label for="nombres" class="form-label">Nombres</label>
      <input type="text" class="form-control" id="nombres" name="usuario_nombres" required>
    </div>

    <div class="mb-3">
      <label for="apellidos" class="form-label">Apellidos</label>
      <input type="text" class="form-control" id="apellidos" name="usuario_apellidos" required>
    </div>

    <div class="mb-3">
      <label for="nit" class="form-label">NIT</label>
      <input type="number" class="form-control" id="nit" name="usuario_nit">
    </div>

    <div class="mb-3">
      <label for="telefono" class="form-label">Teléfono</label>
      <input type="number" class="form-control" id="telefono" name="usuario_telefono">
    </div>

    <div class="mb-3">
      <label for="correo" class="form-label">Correo electrónico</label>
      <input type="email" class="form-control" id="correo" name="usuario_correo" required>
    </div>

    <div class="mb-3">
      <label for="estado" class="form-label">Estado</label>
      <select class="form-select" id="estado" name="usuario_estado">
        <option value="A">Activo</option>
        <option value="I">Inactivo</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="situacion" class="form-label">Situación</label>
      <select class="form-select" id="situacion" name="usuario_situacion">
        <option value="1" selected>Habilitado</option>
        <option value="0">Deshabilitado</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Guardar Usuario</button>
  </form>
</div>