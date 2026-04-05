<head></head>
<div class="modal fade" id="modalAlumno" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header" style="background-color:#87CEEB; color:white;">
  <h5 class="modal-title">Nuevo Alumno</h5>
  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
</div>

      <div class="modal-body">
        <form id="formAlumno">
          @csrf

          <!-- DATOS PERSONALES -->
          <h6>Datos del Alumno</h6>
          <div class="row">
            <div class="col-md-4 mb-3">
              <label>Nombre</label>
              <input type="text" class="form-control" name="nombre" required>
            </div>
            <div class="col-md-4 mb-3">
              <label>Apellido Paterno</label>
              <input type="text" class="form-control" name="apellido_paterno" required>
            </div>
            <div class="col-md-4 mb-3">
              <label>Apellido Materno</label>
              <input type="text" class="form-control" name="apellido_materno" required>
            </div>
          </div>

          <div class="mb-3">
            <label>Fecha de Nacimiento</label>
            <input type="date" class="form-control" name="fechaNacimiento" required>
          </div>

          <!-- NUEVO: GENERACIÓN Y GRUPO -->
          <div class="row">
            <div class="col-md-6 mb-3">
              <label>Generación</label>
              <select class="form-control" name="generacion" required>
                <option value="">Seleccione una generación</option>
                <option value="">Cuadragésima cuarta</option>
                <option value="">Cuadragésima tercera</option>
                <option value="">Cuadragésima segunda</option>
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label>Grupo</label>
              <input type="text" class="form-control" name="grupo" placeholder="Ej. A, B, 1A" required>
            </div>
          </div>

          <!-- TUTOR -->
          <h6>Datos del Tutor</h6>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label>Nombre del Tutor</label>
              <input type="text" class="form-control" name="tutor" required>
            </div>
            <div class="col-md-6 mb-3">
              <label>Parentesco</label>
              <input type="text" class="form-control" name="parentesco" required>
            </div>
          </div>

          <!-- DIRECCIÓN -->
          <h6>Dirección</h6>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label>Calle</label>
              <input type="text" class="form-control" name="calle" required>
            </div>
            <div class="col-md-6 mb-3">
              <label>Colonia</label>
              <input type="text" class="form-control" name="colonia">
            </div>
            <div class="col-md-6 mb-3">
              <label>Localidad</label>
              <input type="text" class="form-control" name="localidad">
            </div>
            <div class="col-md-6 mb-3">
              <label>Municipio</label>
              <input type="text" class="form-control" name="municipio" required>
            </div>
          </div>

          <!-- CONTACTO -->
          <h6>Contacto</h6>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label>Teléfono Tutor</label>
              <input type="text" class="form-control" name="telefonoTutor" required>
            </div>
            <div class="col-md-6 mb-3">
              <label>Celular Alumno</label>
              <input type="text" class="form-control" name="celularAlumno" required>
            </div>
            <div class="col-md-6 mb-3">
              <label>Correo Alumno</label>
              <input type="email" class="form-control" name="correoAlumno" required>
            </div>
            <div class="col-md-6 mb-3">
              <label>Escuela de Procedencia</label>
              <input type="text" class="form-control" name="escuelaProcedencia">
            </div>
          </div>

          <!-- OBSERVACIONES -->
          <div class="mb-3">
            <label>Observaciones</label>
            <textarea class="form-control" name="observaciones" rows="3" ></textarea>
          </div>

          <div class="text-end">
            <button type="button" class="btn" style="background-color:#87CEEB; color:black;">Guardar</button>
          </div>

        </form>
      </div>

    </div>
  </div>
</div>