<link rel="stylesheet" href="{{ asset('css/micss.css') }}">
<link rel="stylesheet" href="{{ asset('css/menulateral.css') }}">

<nav class="navbar navbar-expand-lg bg-white border-bottom py-3 sticky-top">
    <div class="container-fluid px-md-5">
        
        <a class="navbar-brand logo-rutas fw-bold fs-3 fs-md-2" href="/">
            RutasTotal
        </a>

        <div class="d-flex align-items-center">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center gap-2 px-2 px-md-5" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none;">
                    <span class="usuario-texto d-none d-md-inline">
                        @guest
                            Invitado
                        @else
                            @if (Auth::user()->role === 'admin')
                                Admin: {{ Auth::user()->name }}
                            @else
                                Usuario: {{ Auth::user()->name }}
                            @endif
                        @endguest
                    </span>
                    <img src="{{ asset('img/usuario.png') }}" alt="Usuario" width="40" height="40" class="rounded-circle">
                </a>
                
                <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2" aria-labelledby="userMenu">
                    <li class="d-md-none px-3 py-2 text-center fw-bold">
                        @guest
                            Invitado
                        @else
                            @if (Auth::user()->role === 'admin')
                                Admin: {{ Auth::user()->name }}
                            @else
                                Usuario: {{ Auth::user()->name }}
                            @endif
                        @endguest
                    </li>
                    @guest
                        <li><a class="dropdown-item py-2 text-center" href="/login">Iniciar Sesión</a></li>
                        <li><a class="dropdown-item py-2 text-center" href="/registro">Crear Cuenta</a></li>
                    @else
                        @if (Auth::user()->role === 'admin')
                            <li><a class="dropdown-item py-2 text-center" href="/panelAdmin">Panel de Guía</a></li>
                            <li><a class="dropdown-item py-2 text-center" href="/panelUsuario">Panel de Usuario</a></li>
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
                <a href="/subidaRuta">Subir Rutas</a>
                <a href="/rutasMontana">Rutas de Montaña</a>
                <a href="/rutasArida">Rutas de Zona Árida</a>
                <a href="/rutasRio">Rutas de Río</a>
                <a href="/rutasSubidas">Rutas de la Comunidad</a>
            </nav>
        </div>
    </div>
</nav>
