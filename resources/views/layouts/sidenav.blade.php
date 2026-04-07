<head>
<style>

/* Submenú activo */
.nav-item.active > .nav-link {
    background-color: #374151;
    color: #0dcaf0 !important;
    border-radius: 6px;
}

/* Texto activo dentro de submenú */
.multi-level .nav-item.active .sidebar-text {
    color: #0dcaf0 !important;
    font-weight: bold;
}

/* Menú padre activo */
.nav-link[aria-expanded="true"] .sidebar-text {
    color: #0dcaf0;
    font-weight: bold;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"></head>
<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
  <div class="sidebar-inner px-2 pt-3">

    <ul class="nav flex-column pt-3 pt-md-0">

      <!-- LOGO -->
      <li class="nav-item">
        <a href="/dashboard" class="nav-link d-flex align-items-center">
          <span class="sidebar-icon me-3">
            <img src="/assets/img/Logo_Institucional.png" height="40" width="40">
          </span>
          <span class="mt-1 ms-1 sidebar-text">BTI</span>
        </a>
      </li>

      <!-- INICIO -->
      <li class="nav-item {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}">
        <a href="/dashboard" class="nav-link">
          <span class="sidebar-icon"><i class="fa-solid fa-house"></i></span>
          <span class="sidebar-text">Inicio</span>
        </a>
      </li>

      <!-- ================= ALUMNOS ================= -->
      <li class="nav-item">

        <span class="nav-link collapsed d-flex justify-content-between align-items-center"
              data-bs-toggle="collapse"
              data-bs-target="#submenu-alumnos"
              aria-expanded="{{ Request::is('users*') ? 'true' : 'false' }}">

          <span>
            <span class="sidebar-icon"><i class="fa-solid fa-user-graduate"></i></span>

            <!-- 🔥 TEXTO AZUL SI ESTÁ ACTIVO -->
            <span class="sidebar-text {{ Request::is('users*') ? 'text-info fw-bold' : '' }}">
              Alumnos
            </span>
          </span>

          <span class="link-arrow">
            <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"/>
            </svg>
          </span>
        </span>

        <!-- SUBMENU -->
        <div class="multi-level collapse {{ Request::is('users*') ? 'show' : '' }}"
             id="submenu-alumnos"
             data-bs-parent="#sidebarMenu">

          <ul class="flex-column nav">

            <li class="nav-item {{ Request::segment(1) == 'users' ? 'active' : '' }}">
              <a href="/users" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg>
                <span class="sidebar-text">Buscador de alumnos
                </span>
              </a>
            </li>

          </ul>
        </div>
      </li>

      <!-- ================= DOCENTES ================= -->
      <li class="nav-item {{ Request::is('docentes*') ? 'active' : '' }}">

        <span class="nav-link d-flex justify-content-between align-items-center"
              data-bs-toggle="collapse"
              data-bs-target="#submenu-docentes"
              aria-expanded="{{ Request::is('docentes*') ? 'true' : 'false' }}">

          <span>
            <span class="sidebar-icon"><i class="fa-solid fa-person-chalkboard"></i></span>
            <span class="sidebar-text {{ Request::is('docentes*') ? 'text-info fw-bold' : '' }}">
              Docentes
            </span>
          </span>

          <span class="link-arrow">
            <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"/>
            </svg>
          </span>
        </span>

        <!-- SUBMENU -->
        <div class="multi-level collapse {{ Request::is('docentes*') ? 'show' : '' }}"
             id="submenu-docentes"
             data-bs-parent="#sidebarMenu">

          <ul class="flex-column nav">

            <li class="nav-item {{ Request::is('bootstrap-tables') ? 'active' : '' }}">
              <a class="nav-link" href="/bootstrap-tables">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
  <path d="M5.523 12.424q.21-.124.459-.238a8 8 0 0 1-.45.606c-.28.337-.498.516-.635.572l-.035.012a.3.3 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548m2.455-1.647q-.178.037-.356.078a21 21 0 0 0 .5-1.05 12 12 0 0 0 .51.858q-.326.048-.654.114m2.525.939a4 4 0 0 1-.435-.41q.344.007.612.054c.317.057.466.147.518.209a.1.1 0 0 1 .026.064.44.44 0 0 1-.06.2.3.3 0 0 1-.094.124.1.1 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256M8.278 6.97c-.04.244-.108.524-.2.829a5 5 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.5.5 0 0 1 .145-.04c.013.03.028.092.032.198q.008.183-.038.465z"/>
  <path fill-rule="evenodd" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.7 11.7 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.86.86 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.84.84 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.8 5.8 0 0 0-1.335-.05 11 11 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.24 1.24 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a20 20 0 0 1-1.062 2.227 7.7 7.7 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103"/>
</svg>
                <span class="sidebar-text">P. de estudio BGNE</span>
              </a>
            </li>

            <li class="nav-item {{ Request::is('plan-bti') ? 'active' : '' }}">
              <a class="nav-link" href="/plan-bti">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
  <path d="M5.523 12.424q.21-.124.459-.238a8 8 0 0 1-.45.606c-.28.337-.498.516-.635.572l-.035.012a.3.3 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548m2.455-1.647q-.178.037-.356.078a21 21 0 0 0 .5-1.05 12 12 0 0 0 .51.858q-.326.048-.654.114m2.525.939a4 4 0 0 1-.435-.41q.344.007.612.054c.317.057.466.147.518.209a.1.1 0 0 1 .026.064.44.44 0 0 1-.06.2.3.3 0 0 1-.094.124.1.1 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256M8.278 6.97c-.04.244-.108.524-.2.829a5 5 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.5.5 0 0 1 .145-.04c.013.03.028.092.032.198q.008.183-.038.465z"/>
  <path fill-rule="evenodd" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.7 11.7 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.86.86 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.84.84 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.8 5.8 0 0 0-1.335-.05 11 11 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.24 1.24 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a20 20 0 0 1-1.062 2.227 7.7 7.7 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103"/>
</svg>
                <span class="sidebar-text">P. de estudio BTI</span>
              </a>
            </li>

          </ul>
        </div>
      </li>

      <!-- GRUPOS -->
      <li class="nav-item {{ Request::segment(1) == 'transactions' ? 'active' : '' }}">
        <a href="/transactions" class="nav-link">
          <span class="sidebar-icon"><i class="fa-solid fa-users"></i></span>
          <span class="sidebar-text">Grupos</span>
        </a>
      </li>


      <!-- TRÁMITE DE EQUIVALENCIAAA -->
      <li class="nav-item {{ Request::segment(1) == 'transactions' ? 'active' : '' }}">
        <a href="/transactions" class="nav-link">
          <span class="sidebar-icon"><i class="fa-solid fa-users"></i></span>
          <span class="sidebar-text">Trámite de equivalencia</span>
        </a>
      </li>

 <li class="nav-item">
        
        <a href="/logout"
          class="btn btn-info d-flex align-items-center justify-content-center btn-upgrade-pro">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
</svg>
          <span class="sidebar-icon d-inline-flex align-items-center justify-content-center">
          </span>   Cerrar sesión
        </a>
      </li>

    </ul>
  </div>
</nav>