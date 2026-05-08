<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Desierto de Gorafe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>
    @include('util.cabecera')

    <main class="ficha">
        <a href="/rutasArida" class="atras">
            Volver a rutas
        </a>

        <h1 class="text-center display-1">Desierto de Gorafe</h1>

        <div class="descripcion">
            <img src="{{ asset('img/gorafe.jpg') }}" class="img-fluid rounded mb-3" alt="Gorafe">
        
            <h3>Descripción</h3>
            <p>
               El Desierto de Gorafe forma parte del Geoparque de Granada. 
                Es conocido por sus badlands, cañones profundos y paisajes semiáridos espectaculares.
            </p>
        
            <p><strong>Duración:</strong> 3-4 horas</p>
            <p class="dificultad media"><strong>Dificultad:</strong> Media</p>
            <p><strong>Distancia:</strong> 18-10 km</p>
            <p><strong>Tipo de ruta:</strong> Circular</p>
            <p><strong>Altitud máxima:</strong> 900 m</p>
            <p><strong>Recomendado:</strong> Primavera y otoño</p>
        </div>

        <div class="lista-resenas">
            <h3>Reseñas</h3>

            <div class="resena">
                <p><strong>Álvaro:</strong> Paisajes brutales, de lo mejor de Granada.</p>
                <div class="estrellas">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
            </div>

            <div class="resena">
                <p><strong>Elena:</strong> Muy tranquilo y poco masificado, perfecto para desconectar.</p>
                <div class="estrellas">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
            </div>

            <div class="resena">
                <p><strong>Pedro:</strong> Interesante, pero el acceso no es muy cómodo.</p>
                <div class="estrellas">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                </div>
            </div>
        </div>

        <div class="ubicacion">
            <h3>Ubicación: Granada - Andalucía</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d80312.09447922166!2d-3.0502704056520775!3d37.57647661338059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6fcba4d005791f%3A0xb8b24861b40804a1!2sDesierto%20de%20Gorafe%20%E2%80%9C%20los%20coloraos%20%E2%80%9C!5e0!3m2!1ses!2ses!4v1778257429564!5m2!1ses!2ses">
            </iframe>
        </div> 
    </main>
 
    @include('util.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>