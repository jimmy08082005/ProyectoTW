<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Ascenso al Pico de Peñalara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/micss.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>
    @include('util.cabecera') <main class="container-fluid my-5">

    <main class="ficha">
        <a href="/rutas/montana" class="atras">
            Volver a rutas
        </a>

        <h1 class="text-center display-1">Ascenso al Pico de Peñalara</h1>

        <div class="descripcion">
            <img src="{{ asset('img/penalara.jpg') }}" class="img-fluid rounded mb-3" alt="Peñalara">

            <h3>Descripción</h3>
            <p>
                El ascenso al Pico de Peñalara es una de las rutas más populares de la Sierra de Guadarrama.
                Durante el recorrido podrás ver lagunas glaciares, fauna de montaña y vistas panorámicas espectaculares.
                Es una ruta exigente pero muy gratificante.
            </p>

            <p><strong>Duración:</strong> 5-6 horas</p>
            <p class="dificultad media"><strong>Dificultad:</strong> Media</p>
            <p><strong>Distancia:</strong> 14 km</p>
            <p><strong>Tipo de ruta:</strong> Circular</p>
            <p><strong>Altitud máxima:</strong> 2.428 m</p>
            <p><strong>Recomendado:</strong> Primavera, verano y otoño</p>
        </div>

        <div class="lista-resenas">
            <h3>Reseñas</h3>

            <div class="resena">
                <p><strong>Juan:</strong> Ruta increíble, vistas espectaculares.</p>
                <div class="estrellas">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
            </div>

            <div class="resena">
                <p><strong>María:</strong> Muy bonita, aunque algo exigente en algunas zonas.</p>
                <div class="estrellas">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                </div>
            </div>

            <div class="resena">
                <p><strong>Pedro:</strong> Buena ruta, pero demasiada gente en temporada alta.</p>
                <div class="estrellas">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                </div>
            </div>

            <div class="resena">
                <p><strong>Laura:</strong> Paisajes muy bonitos, ideal para desconectar.</p>
                <div class="estrellas">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                </div>
            </div>
        </div>

        <div class="ubicacion">
            <h3>Ubicación: Sierra de Guadarrama</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13188.070737698701!2d-3.9545756!3d40.849725400000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd41690775da5a9b%3A0x4ff8e20797a42f9a!2zUGXDsWFsYXJh!5e1!3m2!1ses!2ses!4v1777713973196!5m2!1ses!2ses">
            </iframe>
        </div>
    </main>

    @include('util.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>