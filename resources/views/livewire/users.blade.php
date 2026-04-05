<title>Volt Laravel Dashboard - User management</title>
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
                <li class="breadcrumb-item active" aria-current="page">Listado de alumnos</li>
            </ol>
        </nav>
        <h2 class="h4">Listado de alumnos</h2>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="#" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
            </svg>
            Nuevo alumno
        </a>
        <div class="btn-group ms-2 ms-lg-3">
            <button type="button" class="btn btn-danger">Importar alumnos masivamente</button>
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
                <input type="text" class="form-control" placeholder="Ingrese el alumno a buscar">
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
        <th>Id</th>
        <th>Alumno</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Número de generación</th>
        <th>ACCIONES</th>
    </tr>
</thead>
       <tbody id="alumnosTable">
    </tbody>
    </table>
    <div class="d-flex justify-content-between align-items-center mt-3">
    <button id="prevBtn" class="btn btn-sm btn-primary">Anterior</button>
    
    <span id="pageInfo"></span>
    
    <button id="nextBtn" class="btn btn-sm btn-primary">Siguiente</button>
</div>
</div>

<script>
document.addEventListener("DOMContentLoaded", async () => {
    const table = document.getElementById("alumnosTable");
    const input = document.querySelector("input");
    const btnBuscar = document.querySelector(".btn-success");

    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    const pageInfo = document.getElementById("pageInfo");

    let alumnosGlobal = [];
    let currentPage = 1;
    let totalPages = 1;
    let isSearching = false;
    let searchText = "";

  
    async function loadAlumnos(page = 1) {
    try {
        const response = await fetch(`/alumnos/list?page=${page}&search=${searchText}`);
        const result = await response.json();

        alumnosGlobal = result.data;
        currentPage = result.page;
        totalPages = result.total_pages;

        renderTable(alumnosGlobal);
        updatePagination();

    } catch (error) {
        console.error("Error:", error);
    }
}

  
    function renderTable(alumnos) {
        table.innerHTML = "";

        alumnos.forEach(alumno => {
            const row = `
                <tr>
                    <td>${alumno.idAlumno}</td>
                    <td>${alumno.nombre}</td>
                    <td>${alumno.apPaterno}</td>
                    <td>${alumno.apMaterno}</td>
                    <td>${alumno.idGeneracion}</td>
                    <td>
                        <button class="btn btn-sm btn-info">👁</button>
                        <button class="btn btn-sm btn-warning">✏</button>
                        <button class="btn btn-sm btn-danger">🗑</button>
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
            loadAlumnos(currentPage - 1);
        }
    });

    nextBtn.addEventListener("click", () => {
        if (currentPage < totalPages) {
            loadAlumnos(currentPage + 1);
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

    loadAlumnos(1);
}

    btnBuscar.addEventListener("click", buscar);
    input.addEventListener("input", buscar);

   
    loadAlumnos();
});
</script>
