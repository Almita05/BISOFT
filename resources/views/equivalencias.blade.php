<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Listado de equivalencias</li>
            </ol>
        </nav>
        <h2 class="h4">Listado de Equivalencias</h2>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">


       <!-- <a href="#" id="btnNuevoAlumno" class="btn" style="background-color:#87CEEB; color:black;"
            class="btn btn-sm btn-gray-800 d-inline-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg"
                width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                <path fill-rule="evenodd"
                    d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
            </svg>
            Nuevo alumno
        </a>

        <div class="btn-group ms-2 ms-lg-3">

            <button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5m-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5" />
                </svg> Importar alumnos masivamente</button>
        </div>-->
    </div>
</div>
<div class="table-settings mb-4">
    <div class="row justify-content-between align-items-center">
        <div class="col-9 col-lg-8 d-md-flex">
            <div class="input-group me-2 me-lg-3 fmxw-300">
                <span class="input-group-text">
                    <svg class="icon icon-xs" x-description="Heroicon name: solid/search"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </span>
                <input type="text" class="form-control" placeholder="Ingrese el alumno a buscar">
            </div>
            <button class="btn btn-sm px-3 btn-success ms-3">Buscar</button>
        </div>

    </div>
</div>
<div class="row g-4">

    <!-- CARD ALUMNO -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card shadow border-0 h-100">
            <div class="card-body">

                <!-- Nombre -->
                <h5 class="fw-bold mb-2">Juan Pérez López</h5>

                <!-- Info -->
                <p class="mb-1"><strong>Semestre de ingreso:</strong> 1°</p>
                <p class="mb-1"><strong>Clave de grupo:</strong> A</p>

                <!-- Estado -->
                <span class="badge bg-warning text-dark">
                    En proceso
                </span>

            </div>
        </div>
    </div>

    <!-- CARD -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card shadow border-0 h-100">
            <div class="card-body">

                <h5 class="fw-bold mb-2">María García</h5>

                <p class="mb-1"><strong>Semestre de ingreso:</strong> 2°</p>
                <p class="mb-1"><strong>Clave de Grupo:</strong> B</p>

                <span class="badge bg-success">
                    Aprobada
                </span>

            </div>
        </div>
    </div>

    <!-- CARD -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card shadow border-0 h-100">
            <div class="card-body">

                <h5 class="fw-bold mb-2">Carlos Ramírez</h5>

                <p class="mb-1"><strong>Semestre de ingreso:</strong> 3°</p>
                <p class="mb-1"><strong>Clave de grupo:</strong> C</p>

                <span class="badge bg-danger">
                    No tramitada
                </span>

            </div>
        </div>
    </div>


    <!-- CARD ALUMNO -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card shadow border-0 h-100">
            <div class="card-body">

                <!-- Nombre -->
                <h5 class="fw-bold mb-2">Juan Pérez López</h5>

                <!-- Info -->
                <p class="mb-1"><strong>Semestre de ingreso:</strong> 1°</p>
                <p class="mb-1"><strong>Clave de grupo:</strong> A</p>

                <!-- Estado -->
                <span class="badge bg-warning text-dark">
                    En proceso
                </span>

            </div>
        </div>
    </div>

    <!-- CARD -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card shadow border-0 h-100">
            <div class="card-body">

                <h5 class="fw-bold mb-2">María García</h5>

                <p class="mb-1"><strong>Semestre de ingreso:</strong> 2°</p>
                <p class="mb-1"><strong>Clave de Grupo:</strong> B</p>

                <span class="badge bg-success">
                    Aprobada
                </span>

            </div>
        </div>
    </div>

    <!-- CARD -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card shadow border-0 h-100">
            <div class="card-body">

                <h5 class="fw-bold mb-2">Carlos Ramírez</h5>

                <p class="mb-1"><strong>Semestre de ingreso:</strong> 3°</p>
                <p class="mb-1"><strong>Clave de grupo:</strong> C</p>

                <span class="badge bg-danger">
                    No tramitada
                </span>

            </div>
        </div>
    </div>



    <!-- CARD ALUMNO -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card shadow border-0 h-100">
            <div class="card-body">

                <!-- Nombre -->
                <h5 class="fw-bold mb-2">Juan Pérez López</h5>

                <!-- Info -->
                <p class="mb-1"><strong>Semestre de ingreso:</strong> 1°</p>
                <p class="mb-1"><strong>Clave de grupo:</strong> A</p>

                <!-- Estado -->
                <span class="badge bg-warning text-dark">
                    En proceso
                </span>

            </div>
        </div>
    </div>

    <!-- CARD -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card shadow border-0 h-100">
            <div class="card-body">

                <h5 class="fw-bold mb-2">María García</h5>

                <p class="mb-1"><strong>Semestre de ingreso:</strong> 2°</p>
                <p class="mb-1"><strong>Clave de Grupo:</strong> B</p>

                <span class="badge bg-success">
                    Aprobada
                </span>

            </div>
        </div>
    </div>

    <!-- CARD -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card shadow border-0 h-100">
            <div class="card-body">

                <h5 class="fw-bold mb-2">Carlos Ramírez</h5>

                <p class="mb-1"><strong>Semestre de ingreso:</strong> 3°</p>
                <p class="mb-1"><strong>Clave de grupo:</strong> C</p>

                <span class="badge bg-danger">
                    No pagada
                </span>

            </div>
        </div>
    </div>


</div>