<link rel="stylesheet" href="css/menulateral.css">

<nav class="navbar navbar-expand-lg bg-white border-bottom py-3 sticky-top">
    <div class="container-fluid px-md-5">
        
        <a class="navbar-brand fw-bold fs-3 fs-md-2" href="/" style="color:rgb(9, 238, 9);">
            RutasTotal
        </a>

        <div class="d-flex align-items-center">
            <div class="dropdown d-none d-lg-flex" style="position: relative; z-index: 1050;">
                <a href="#" class="d-flex align-items-center px-2 px-md-5" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('img/usuario.png') }}" alt="Usuario" width="40" height="40" class="rounded-circle">
                </a>
                
                <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2" aria-labelledby="userMenu">
                    @guest
                        <li><a class="dropdown-item py-2 text-center" href="/login">Iniciar Sesión</a></li>
                        <li><a class="dropdown-item py-2 text-center" href="/registro">Crear Cuenta</a></li>
                    @else
                        @if (Auth::user()->role === 'admin')
                            <li><a class="dropdown-item py-2 text-center" href="/panelAdmin">Panel de Guía</a></li>
                        @else
                            <li><a class="dropdown-item py-2 text-center" href="/panelUsuario">Panel de Usuario</a></li>
                        @endif

                        <li><hd-none d-lg-flexr class="dropdown-divider"></li>
                        <li><a class="dropdown-item py-2 text-center" href="/logout">Cerrar Sesión</a></li>
                    @endguest     
                </ul>
            </div>

            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle" class="menu-icon"></label>
            <div class="sidebar-overlay"></div>
            <nav class="sidebar">
                <div class="sidebar-user-mobile d-lg-none">
                    <div class="dropdown">
                        <a1 href="#" class="d-flex align-items-center" id="userMenuSidebar" 
                        data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('img/usuario.png') }}" alt="Usuario" width="36" height="36" class="rounded-circle">
                        </a1>
                        <ul class="dropdown-menu shadow border-0 mt-2" aria-labelledby="userMenuSidebar">
                            @guest
                                <li><a1 class="dropdown-item py-2 text-center" href="/login">Iniciar Sesión</a1></li>
                                <li><a1 class="dropdown-item py-2 text-center" href="/registro">Crear Cuenta</a1></li>
                            @else
                                @if (Auth::user()->role === 'admin')
                                    <li><a1 class="dropdown-item py-2 text-center" href="/panelAdmin">Panel de Guía</a1></li>
                                @else
                                    <li><a1 class="dropdown-item py-2 text-center" href="/panelUsuario">Panel de Usuario</a1></li>
                                @endif
                                <li><hr class="dropdown-divider"></li>
                                <li><a1 class="dropdown-item py-2 text-center" href="/logout">Cerrar Sesión</a1></li>
                            @endguest
                        </ul>
                    </div>
                </div>
                <a href="/subidaRuta">Subir Rutas</a>
            </nav>

        </div>

    </div>
</nav>
