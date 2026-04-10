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

                    <!-- DATOS ALUMNO -->
                    <button class="btn w-100 text-start mb-2 d-flex justify-content-between align-items-center titulo-seccion" 
                        type="button" data-bs-toggle="collapse" data-bs-target="#datosAlumno" aria-expanded="true">

                        <span>DATOS DEL ALUMNO</span>
                        <svg class="icon" width="20" height="20" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z">
                            </path>
                        </svg>
                    </button>
                    <div class="collapse show" id="datosAlumno">
                        <hr>

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
                            <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento"
                                required>
                        </div>

                        <p id="edadAlumno"></p>
                    </div>

                    <!-- DATOS TUTOR -->
                    <button class="btn w-100 text-start mb-2 d-flex justify-content-between align-items-center titulo-seccion"
                        type="button" data-bs-toggle="collapse" data-bs-target="#datosTutor" aria-expanded="true">

                        <span>DATOS DEL TUTOR Y DE CONTACTO</span>

                        <svg class="icon" width="20" height="20" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z">
                            </path>
                        </svg>
                    </button>

                    <div class="collapse" id="datosTutor">
                        <hr>
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
                    </div>

                    <!-- DATOS ACADÉMICOS -->
                    <button class="btn w-100 text-start mb-2 d-flex justify-content-between align-items-center titulo-seccion"
                        type="button" data-bs-toggle="collapse" data-bs-target="#datosAcademicos" aria-expanded="true">

                        <span>DATOS ACADÉMICOS</span>

                        <svg class="icon" width="20" height="20" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z">
                            </path>
                        </svg>
                    </button>

                    <div class="collapse" id="datosAcademicos">
                        <hr>
                        <br>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label>C.C.T. <span style="color:red">*</span></label>
                                <select class="form-control" id="selectGrupos" required>
                                    <option value="">Selecciona una opcion</option>
                                    <option value="">21PBH0353G-BTI</option>
                                    <option value="">21PBH0353G-BGNE</option>
                                    <option value="">21PBH0353G-INFORMATICA Y COMPUTACION</option>
                                    <option value="">21PBH0353G-LIBRE</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Semestre <span style="color:red">*</span></label>
                                <select class="form-control" id="selectGrupos" required>
                                    <option value="">Selecciona una opcion</option>
                                    <option value="">1ER SEMESTRE</option>
                                    <option value="">2DO SEMESTRE</option>
                                    <option value="">3ER SEMESTRE</option>
                                    <option value="">4TO SEMESTRE</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Clave de grupo<span style="color:red">*</span></label>
                                <select class="form-control" id="selectGrupos" required>
                                    <option value="">Selecciona una opcion</option>
                                    <option value="">BGNE0203</option>
                                    <option value="">BGNE0203</option>
                                    <option value="">BGNE0203</option>
                                    <option value="">BGNE0203</option>
                                </select>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input class="form-check-input" type="checkbox" id="chkEquivalencia"
                                    name="equivalencia">
                                <label>Equivalencia de estudios</label>
                            </div>

                            <div class="col-md-6 mb-3">
                                <input class="form-check-input" type="checkbox" name="martinez">
                                <label>Viene de Martínez</label>
                            </div>
                        </div>
                    </div>

                    <button class="btn w-100 text-start mb-2 d-flex justify-content-between align-items-center titulo-seccion" 
                        type="button" data-bs-toggle="collapse" data-bs-target="#cursos" aria-expanded="true">

                        <span>CURSOS EXTRACURRICULARES</span>

                        <svg class="icon" width="20" height="20" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z">
                            </path>
                        </svg>
                    </button>

                    <div class="collapse" id="cursos">
                        <hr>
                        <br>

                        <div class="col-md-12 mb-3">
                            <input class="form-check-input" type="checkbox" name="martinez">
                            <label>OFI02-Curso de computación</label>
                        </div>
                        <div class="col-md-12 mb-3">
                            <input class="form-check-input" type="checkbox" name="martinez">
                            <label>OFI02-Curso de reparación de sistemas digitales</label>
                        </div>
                        <div class="col-md-12 mb-3">
                            <input class="form-check-input" type="checkbox" name="martinez">
                            <label>OFI02-Curso de diseño Gráfico</label>
                        </div>
                        <div class="col-md-12 mb-3">
                            <input class="form-check-input" type="checkbox" name="martinez">
                            <label>CDI-Curso de inglés</label>
                        </div>
                    </div>

                    <!-- OBSERVACIONES -->
                    <div class="mb-3">
                        <label>Observaciones</label>
                        <textarea class="form-control" name="observaciones" rows="3"></textarea>
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