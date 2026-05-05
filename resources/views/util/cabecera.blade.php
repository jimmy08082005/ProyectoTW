<nav class="navbar navbar-expand-lg bg-white border-bottom py-3">
    <div class="container-fluid px-md-5">
        
        <a class="navbar-brand fw-bold fs-2" href="/" style="color:rgb(9, 238, 9);">
            RutasTotal
        </a>

        <div class="collapse navbar-collapse justify-content-center">
            </div>

        <div class="d-flex align-items-center">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('img/usuario.png') }}" alt="Usuario" width="32" height="32" class="rounded-circle">
                </a>
                
                <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2" aria-labelledby="userMenu">
                    <li><a class="dropdown-item py-2" href="/login">Iniciar Sesión</a></li>
                    <li><a class="dropdown-item py-2" href="/registro">Crear Cuenta</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item py-2" href="/panel-usuario">Panel de Usuario</a></li>
                </ul>
            </div>
        </div>

    </div>
</nav>