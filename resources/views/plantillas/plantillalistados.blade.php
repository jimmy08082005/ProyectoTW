<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <!-- 🏷️ Título de la página -->
    <title>RUTAS DE [TIPO]</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS propio -->
    <link rel="stylesheet" href="css/micss.css">
</head>

<body>

    <!-- ================= HEADER ================= -->
    <header>
        <h1 class="text-center display-1">
            Rutas de [TIPO]
        </h1>

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">

                <!-- Logo / Inicio -->
                <a class="navbar-brand" href="/index.html">Inicio</a>

                <!-- Botón móvil -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menú -->
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="/iniciarsesion.html">Iniciar Sesión</a>
                        <a class="nav-link" href="/crearcuenta.html">Crear Cuenta</a>
                    </div>
                </div>

            </div>
        </nav>
    </header>
    <!-- =============== FIN HEADER =============== -->


    <!-- ================= MAIN ================= -->
    <main class="lista-montanias">

        <!-- 👉 COPIAR ESTE BLOQUE PARA CADA RUTA -->
        <div class="card ruta-listado">
            <div class="ruta-contenido">

                <!-- 📸 Imagen -->
                <img src="img/imagen.jpg" alt="Nombre ruta">

                <div class="ruta-info card-body">

                    <!-- 🏷️ Nombre -->
                    <h5 class="card-title">NOMBRE DE LA RUTA</h5>

                    <!-- 📝 Descripción -->
                    <p>
                        <strong>Descripción:</strong> Breve descripción de la ruta.
                    </p>

                    <!-- 📍 Ubicación -->
                    <p>
                        <strong>Localización:</strong> Ciudad / Parque
                    </p>

                    <!-- ⏱️ Duración -->
                    <p>
                        <strong>Duración:</strong> X horas
                    </p>

                    <!-- ⚠️ Dificultad -->
                    <!-- SOLO usar: facil / media / alta -->
                    <p class="dificultad media">
                        <strong>Dificultad:</strong> Media
                    </p>

                    <!-- 🔗 Enlace -->
                    <a href="rutasmontaña/archivo.html" class="btn">
                        Ver detalles
                    </a>

                </div>
            </div>
        </div>
        <!-- 👉 FIN BLOQUE RUTA -->


    </main>
    <!-- =============== FIN MAIN =============== -->


    <!-- ================= FOOTER ================= -->
    <footer class="text-center py-3">
        <p class="mb-1">© 2026. Todos los derechos reservados.</p>
        <p class="mb-1">Contenido protegido por derechos de autor.</p>
        <a href="/contacta.html">Contacta</a>
    </footer>
    <!-- =============== FIN FOOTER =============== -->


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>