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
<div class="modal fade" id="modalGrupo" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header" style="background-color:#87CEEB; color:white;">
                <h5 class="modal-title">Nuevo grupo</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form id="formGrupo">
                    @csrf

                    <div class="collapse show" id="datosAlumno">
                        <hr>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label>Clave del grupo</label>
                                <input type="text" id="claveGrupo" class="form-control">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label>Fecha inicio</label>
                                <input type="date" id="fechaInicio" class="form-control">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label>Fecha fin</label>
                                <input type="date" id="fechaFin" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label>C.C.T. <span style="color:red">*</span></label>
                                <select class="form-control" id="selectGrupos" required>
                                    <option value="">Selecciona una opcion</option>
                                    <option value="">21PBH0353G-BTI</option>
                                    <option value="">21PBH0353G-BGNE</option>
                                    <option value="">21PBH0353G-INFORMATICA Y COMPUTACION</option>
                                    <option value="">21PBH0353G-LIBRE</option>
                                </select>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label>Semestre <span style="color:red">*</span></label>
                                <select class="form-control" id="selectGrupos" required>
                                    <option value="">Selecciona una opcion</option>
                                    <option value="">1ER SEMESTRE</option>
                                    <option value="">2DO SEMESTRE</option>
                                    <option value="">3ER SEMESTRE</option>
                                    <option value="">4TO SEMESTRE</option>
                                </select>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label>Plan de estudios</label>
                                <input type="text" id="planEstudios" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-3">
                               <label>Tipo de periodo <span style="color:red">*</span></label>
                                <select class="form-control" id="selectGrupos" required>
                                    <option value="">Selecciona una opcion</option>
                                    <option value="">Anual</option>
                                    <option value="">Semestral</option>
                                    <option value="">Trimestral</option>
                                    <option value="">Otro</option>
                                </select>
                            </div>
                        </div>
 <div class="text-end">
                        <button type="button" class="btn"
                            style="background-color:#87CEEB; color:black;">Guardar</button>
                    </div>


                </form>
            </div>

        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {


    fetch("/generaciones")
        .then(res => res.json())
        .then(data => {
            let select = document.getElementById("selectGeneraciones");

            data.forEach(gen => {
                let option = document.createElement("option");
                option.value = gen.id;
                option.text = gen.nombre;
                select.appendChild(option);
            });
        });

    document.getElementById("selectGeneraciones").addEventListener("change", function() {

        let id = this.value;
        let selectGrupos = document.getElementById("selectGrupos");

        selectGrupos.innerHTML = '<option value="">Seleccione un grupo</option>';

        if (id !== "") {
            fetch(`/grupos/${id}`)
                .then(res => res.json())
                .then(data => {
                    data.forEach(grupo => {
                        let option = document.createElement("option");
                        option.value = grupo.id;
                        option.text = grupo.nombre;
                        selectGrupos.appendChild(option);
                    });
                });
        }
    });

    document.getElementById("fechaNacimiento").addEventListener("change", function() {

        let fechaNacimiento = new Date(this.value);
        let hoy = new Date();

        let años = hoy.getFullYear() - fechaNacimiento.getFullYear();
        let meses = hoy.getMonth() - fechaNacimiento.getMonth();
        let dias = hoy.getDate() - fechaNacimiento.getDate();


        if (dias < 0) {
            meses--;
            let ultimoMes = new Date(hoy.getFullYear(), hoy.getMonth(), 0);
            dias += ultimoMes.getDate();
        }

        if (meses < 0) {
            años--;
            meses += 12;
        }

        document.getElementById("edadAlumno").innerText =
            `Edad: ${años} años, ${meses} meses y ${dias} días`;
    });

});
</script>