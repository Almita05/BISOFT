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
                <li class="breadcrumb-item active" aria-current="page">Listado de docentes</li>
            </ol>
        </nav>
        <h2 class="h4">Listado de docentes</h2>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">


        <a href="#" id="btnNuevoDocente" class="btn" style="background-color:#87CEEB; color:black;"
            class="btn btn-sm btn-gray-800 d-inline-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg"
                width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                <path fill-rule="evenodd"
                    d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
            </svg>
            Nuevo docente
        </a>

        <div class="btn-group ms-2 ms-lg-3">

            <button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5m-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5" />
                </svg> Importar docentes masivamente</button>
        </div>
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
                <input type="text" class="form-control" placeholder="Ingrese el docente a buscar">
            </div>
            <button class="btn btn-sm px-3 btn-success ms-3">Buscar</button>
        </div>

    </div>
</div>
<div class="card card-body shadow border-0 table-wrapper table-responsive">


    <table class="table user-table table-hover align-items-center">
        <!--  <thead>
            <tr>
                <th class="border-bottom">
                    <div class="form-check dashboard-check">
                        <input class="form-check-input" type="checkbox" value="" id="userCheck55">
                        <label class="form-check-label" for="userCheck55">
                        </label>
                    </div>
                </th>
                <th class="border-bottom">Apellido Paterno</th>
                <th class="border-bottom">Apellido Materno</th>
                <th class="border-bottom">Nombre</th>
                <th class="border-bottom">Generación</th>
                <th class="border-bottom">ACCIONES</th>
            </tr>
        </thead> -->

        <thead>
            <tr>
                <th>ID</th>
                <th>CLAVE DEL GRUPO</th>
                <th>FECHA DE CREACION</th>
                <th>FECHA DE INICIO</th>
                <th>FECHA DE FIN</th>
                <th>C.C.T.</th>
                <th>TIPO DE PERIODO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody id="docentesTable">
        </tbody>
    </table>
    <div class="d-flex justify-content-between align-items-center mt-3">
        <button id="prevBtn" class="btn btn-sm btn-primary">Anterior</button>

        <span id="pageInfo"></span>

        <button id="nextBtn" class="btn btn-sm btn-primary">Siguiente</button>
    </div>
</div>
<div id="contenedorModal"></div>

<script>
document.addEventListener("DOMContentLoaded", async () => {
    const table = document.getElementById("docentesTable");
    const input = document.querySelector("input");
    const btnBuscar = document.querySelector(".btn-success");

    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    const pageInfo = document.getElementById("pageInfo");

    let docentesGlobal = [];
    let currentPage = 1;
    let totalPages = 1;
    let isSearching = false;
    let searchText = "";


    async function loadDocentes(page = 1) {
        try {
            const response = await fetch(`/docentes/list?page=${page}&search=${searchText}`);

            const result = await response.json();

            // 🔴 VALIDACIÓN CLAVE
            if (!response.ok || !result.data) {
                console.error("Error del backend:", result);
                table.innerHTML = `<tr><td colspan="6">Error al cargar datos</td></tr>`;
                return;
            }

            docentesGlobal = result.data;
            currentPage = result.page;
            totalPages = result.total_pages;

            renderTable(docentesGlobal);
            updatePagination();

        } catch (error) {
            console.error("Error:", error);
        }
    }


    function renderTable(docentes) {
        table.innerHTML = "";

        docentes.forEach(docente => {
            const row = `
                <tr>
                    <td>${docente.id}</td>
                <td>${docente.clave}</td>
                <td>${docente.fecha_creacion}</td>
                <td>${docente.fecha_inicio}</td>
                <td>${docente.fecha_fin}</td>
                <td>${docente.cct}</td>
                <td>${docente.tipo_periodo}</td>
                    <td>
                        <button class="btn btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
</svg></i></button>
                        <button class="btn btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg></button>
                        <button class="btn btn-sm"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg></button>
                    </td>
                </tr>
            `;
            table.innerHTML += row;
        });
    }


    function updatePagination() {
        pageInfo.textContent = `Página ${currentPage} de ${totalPages}`;

        prevBtn.disabled = currentPage === 1;
        nextBtn.disabled = currentPage === totalPages;
    }


    prevBtn.addEventListener("click", () => {
        if (currentPage > 1) {
            loadDocentes(currentPage - 1);
        }
    });

    nextBtn.addEventListener("click", () => {
        if (currentPage < totalPages) {
            loadDocentes(currentPage + 1);
        }
    });


    const normalizar = (texto) => {
        return texto
            .toLowerCase()
            .normalize("NFD")
            .replace(/[\u0300-\u036f]/g, "");
    };


    function buscar() {
        searchText = input.value;
        currentPage = 1;

        loadDocentes(1);
    }

    btnBuscar.addEventListener("click", buscar);
    input.addEventListener("input", buscar);


    loadDocentes();
});


document.getElementById("btnNuevoDocente").addEventListener("click", function(e) {
    e.preventDefault();

    fetch("{{ route('docentes.crear') }}")
        .then(res => {
            if (!res.ok) throw new Error("Error en servidor");
            return res.text();
        })
        .then(html => {
            const contenedor = document.getElementById("contenedorModal");

            if (!contenedor) {
                console.error("No existe #contenedorModal");
                return;
            }

            contenedor.innerHTML = html;

            let modal = new bootstrap.Modal(document.getElementById('modalDocente'));
            modal.show();
        })
        .catch(err => console.error(err));
});
</script>