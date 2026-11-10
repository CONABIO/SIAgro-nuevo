<nav class="navbar navbar-expand-xl fixed-top py-2" style="background-color: #77140A !important; border-bottom: 1px solid rgba(255, 255, 255, 0.12); box-shadow: 0 4px 20px rgba(0, 0, 0, 0.25);">
    <div class="container-fluid px-lg-5">
        <div class="d-flex align-items-center gap-3">
            <a href="{{ route('home') }}" class="d-flex align-items-center text-decoration-none">
                <img src="{{ asset('images/conabioBlanco.png') }}"
                     onerror="this.onerror=null; this.src='https://www.gob.mx/cms/uploads/action_program/main_image/27649/conabioBlanco.png';"
                     alt="Conabio" width="150">
            </a>
            <div style="width: 2px; height: 38px; background-color: white;"></div>
              <a href="{{ route('home') }}" class="d-inline-flex align-items-center text-decoration-none">
                <img src="{{ asset('images/LogoSIAgro.png') }}"
                     alt="SIAgroBD"
                     style="height: 70px; width: auto; object-fit: contain; filter: brightness(0) invert(1);">
            </a>
        </div>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <i class="bi bi-list fs-2 text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav mx-auto mb-2 mb-xl-0 gap-1">
                <li class="nav-item">
                    <a class="nav-link nav-link-modern {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        <i class="bi bi-house-door me-1"></i> Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-modern {{ request()->routeIs('acerca') ? 'active' : '' }}" href="{{ route('acerca') }}">
                        Acerca de
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-link-modern dropdown-toggle {{ request()->routeIs('materiales*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown">
                        Contenido y Difusión
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark-custom shadow-lg">
                        <li>
                            <a class="dropdown-item py-2 {{ request()->routeIs('materiales') ? 'active' : '' }}" href="{{ route('materiales') }}">
                                <i class="bi bi-megaphone me-2"></i> Materiales de comunicación
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item py-2 {{ request()->routeIs('materiales.tecnicos') ? 'active' : '' }}" href="{{ route('materiales.tecnicos') }}">
                                <i class="bi bi-file-earmark-pdf me-2"></i> Materiales técnicos
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-link-modern dropdown-toggle {{ request()->routeIs('aplicaciones', 'especies', 'bases.datos') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown">
                        Datos y Herramientas
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark-custom shadow-lg">
                        <li>
                            <a class="dropdown-item py-2 {{ request()->routeIs('aplicaciones') ? 'active' : '' }}" href="{{ route('aplicaciones') }}">
                                <i class="bi bi-map me-2"></i> Aplicaciones
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item py-2 {{ request()->routeIs('especies') ? 'active' : '' }}" href="{{ route('especies') }}">
                                <i class="bi bi-flower1 me-2"></i> Especies de agrobiodiversidad
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item py-2 {{ request()->routeIs('bases.datos') ? 'active' : '' }}" href="{{ route('bases.datos') }}">
                                <i class="bi bi-database me-2"></i> Bases de datos
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item py-2 {{ request()->routeIs('herramientas') ? 'active' : '' }}" href="{{ route('herramientas') }}">
                                <i class="bi bi-tools me-2"></i> Herramientas
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-modern {{ request()->routeIs('forma_citar') ? 'active' : '' }}" href="{{ route('forma_citar') }}">
                        Cómo citar y contacto
                    </a>
                </li>
            </ul>
            <div class="d-flex align-items-center gap-2 mt-3 mt-xl-0">
                <a href="{{ route('registro') }}"
                   class="btn btn-sm rounded-pill px-3 py-1 fw-bold shadow-sm"
                   style="background-color: #ffffff; color: #77140A; border: none; font-size: 0.85rem;">
                    Registro
                </a>
                <a href="{{ route('uso_interno') }}"
                   class="btn btn-sm text-white rounded-pill px-3 py-1 fw-semibold"
                   style="background-color: rgba(0, 0, 0, 0.35); border: 1px solid rgba(255, 255, 255, 0.25); font-size: 0.85rem;">
                    <i class="bi bi-lock-fill me-1 opacity-75"></i> Uso interno
                </a>
            </div>
        </div>
    </div>
</nav>
