<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{NOMBRE_RUTA}}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/micss.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>

    <header>
        <h1 class="text-center display-1">{{NOMBRE_RUTA}}</h1>

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="/index.html">Inicio</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="/iniciarsesion.html">Iniciar Sesión</a>
                        <a class="nav-link" href="/crearcuenta.html">Crear Cuenta</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="ficha">

        <a href="/listaRutasMontaña.html" class="atras">
            Volver a rutas
        </a>

        <!-- 📌 DESCRIPCIÓN -->
        <div class="descripcion">

            <img src="{{IMAGEN}}" alt="ruta">

            <h3>Descripción</h3>
            <p>{{DESCRIPCION}}</p>

            <p><strong>Duración:</strong> {{DURACION}}</p>
            <p class="dificultad {{CLASE_DIFICULTAD}}">
                <strong>Dificultad:</strong> {{DIFICULTAD}}
            </p>
            <p><strong>Distancia:</strong> {{DISTANCIA}}</p>
            <p><strong>Tipo de ruta:</strong> {{TIPO}}</p>
            <p><strong>Altitud máxima:</strong> {{ALTITUD}}</p>
            <p><strong>Recomendado:</strong> {{TEMPORADA}}</p>
        </div>

        <!-- ⭐ RESEÑAS -->
        <div class="lista-resenas">
            <h3>Reseñas</h3>

            {{RESENAS}}

        </div>

        <!-- 📍 MAPA -->
        <div class="ubicacion">
            <h3>Ubicación: {{UBICACION}}</h3>
            <iframe src="{{MAPA}}"></iframe>
        </div>

    </main>

    <footer class="text-center py-3">
        <p>© 2026. Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>