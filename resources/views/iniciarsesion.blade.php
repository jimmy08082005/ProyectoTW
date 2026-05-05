<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/micss.css">
</head>

<body>
    <header>
        <h1 class="text-center display-1">Iniciar Sesión</h1>

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="/index.html">Inicio</a>
    
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
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


    <div class="p-3">
        <form>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                    placeholder="Introduce tu correo">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" placeholder="Introduce tu contraseña">
            </div>
            <div class="text-center">
                <button type="submit">Iniciar Sesión</button>
            </div>
        </form>
    </div>

    <footer class="text-center py-3">
        <p class="mb-1">© 2026. Todos los derechos reservados.</p>
        <p class="mb-1">Este sitio web y su contenido están protegidos por derechos de autor.</p>
        <a href="/contacta.html">Contacta</a>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>