<style>
.icon {
    transition: transform 0.3s ease;
}


.titulo-seccion {
    font-size: 15px;
    font-weight: 600;
}


button[aria-expanded="true"] .icon {
    transform: rotate(90deg);
}
</style>
<div class="modal fade" id="modalDocente" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header" style="background-color:#87CEEB; color:white;">
                <h5 class="modal-title">Nuevo docente</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form id="formDocente">
                    @csrf

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label>Nombre<span style="color:red">*</span></label>
                            <input type="text" id="nombreDocente" class="form-control" placeholder="Ej. María">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>Apellido Paterno<span style="color:red">*</span></label>
                            <input type="text" id="apPaternoDocente" class="form-control" placeholder="Ej. Martínez">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>Apellido Materno<span style="color:red">*</span></label>
                            <input type="text" id="apMaternoDocente" class="form-control" placeholder="Ej. Hernández">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Correo<span style="color:red">*</span></label>
                            <input type="email" id="correoDocente" class="form-control" placeholder="ejemplo@gmail.com">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Teléfono<span style="color:red">*</span></label>
                            <input type="text" id="telefonoDocente" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Status<span style="color:red">*</span></label>
                            <select id="statusDocente" class="form-control">
                                <option value="ACTIVO">ACTIVO</option>
                                <option value="INACTIVO">INACTIVO</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Observaciones<span style="color:red">*</span></label>
                            <textarea id="observacionesDocente" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="button" id="btnGuardarDocente" class="btn"
                            style="background-color:#87CEEB; color:black;">
                            Guardar
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {


    

});
</script>