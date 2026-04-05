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

          
          <h6>Datos del Alumno</h6>
          <hr>
          <br>
          <div class="row">
            <div class="col-md-4 mb-3">
              <label>Nombre<span style="color:red">*</span></label>
              <input type="text" class="form-control" name="nombre" required>
            </div>
            <div class="col-md-4 mb-3">
              <label>Apellido Paterno<span style="color:red">*</span></label>
              <input type="text" class="form-control" name="apellido_paterno" required>
            </div>
            <div class="col-md-4 mb-3">
              <label>Apellido Materno<span style="color:red">*</span></label>
              <input type="text" class="form-control" name="apellido_materno" required>
            </div>
          </div>

          <div class="mb-3">
            <label>Fecha de Nacimiento<span style="color:red">*</span></label>
            <input type="date" class="form-control" name="fechaNacimiento" required>
          </div>

          <!-- NUEVO: GENERACIÓN Y GRUPO -->
          <div class="row">
            <div class="col-md-6 mb-3">
              <label>Generación<span style="color:red">*</span></label>
              <select class="form-control" name="generacion" required>
                <option value="">Seleccione una generación</option>
                <option value="">Cuadragésima cuarta</option>
                <option value="">Cuadragésima tercera</option>
                <option value="">Cuadragésima segunda</option>
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label>Grupo<span style="color:red">*</span></label>
              <input type="text" class="form-control" name="grupo" placeholder="Ej. A, B, 1A" required>
            </div>
          </div>

          <br>
          <h6>Datos del Tutor y de contacto</h6>
          <hr>
          <br>
          
          <div class="row">
            <div class="col-md-6 mb-3">
              <label>Nombre del Tutor<span style="color:red">*</span></label>
              <input type="text" class="form-control" name="tutor" required>
            </div>
            <div class="col-md-6 mb-3">
              <label>Parentesco<span style="color:red">*</span></label>
              <input type="text" class="form-control" name="parentesco" required>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label>Calle<span style="color:red">*</span></label>
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
              <label>Municipio<span style="color:red">*</span></label>
              <input type="text" class="form-control" name="municipio" required>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label>Teléfono Tutor<span style="color:red">*</span></label>
              <input type="text" class="form-control" name="telefonoTutor" required>
            </div>
            <div class="col-md-6 mb-3">
              <label>Celular Alumno<span style="color:red">*</span></label>
              <input type="text" class="form-control" name="celularAlumno" required>
            </div>
            <div class="col-md-6 mb-3">
              <label>Correo Alumno<span style="color:red">*</span></label>
              <input type="email" class="form-control" name="correoAlumno" required>
            </div>
            <div class="col-md-6 mb-3">
              <label>Escuela de Procedencia</label>
              <input type="text" class="form-control" name="escuelaProcedencia">
            </div>
          </div>


          <div class="row">
            <div class="col-md-6 mb-3">
                <input class="form-check-input" type="checkbox" value="" name="equivalencia" >
              <label>Equivalencia de estudios</label>
            </div>
            <div class="col-md-6 mb-3">
                <input class="form-check-input" type="checkbox" value="" name="equivalencia">
              <label>Viene de Martínez</label>
              
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