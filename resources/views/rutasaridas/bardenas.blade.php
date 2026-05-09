<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Bardenas Reales</title>
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

        <h1 class="text-center display-1">Bardenas Reales</h1>

        <div class="descripcion">
            <img src="{{ asset('img/bardenas.jpg') }}" class="img-fluid rounded mb-3" alt="Bardenas">
        
            <h3>Descripción</h3>
            <p>
               Las Bardenas Reales son un parque natural semidesértico con paisajes únicos de arcillas, 
               yesos y areniscas erosionadas. 
               Destacan sus barrancos, mesetas y formaciones como Castildetierra.
            </p>
        
            <p><strong>Duración:</strong> 4-5 horas</p>
            <p class="dificultad baja"><strong>Dificultad:</strong> Baja</p>
            <p><strong>Distancia:</strong> 10-15 km</p>
            <p><strong>Tipo de ruta:</strong> Circular</p>
            <p><strong>Altitud máxima:</strong> 600 m</p>
            <p><strong>Recomendado:</strong> Primavera y otoño</p>
        </div>

        <div class="lista-resenas">
            <h3>Reseñas</h3>

            <div class="resena">
                <p><strong>María:</strong> Lugar espectacular, parece un desierto de película.</p>
                <div class="estrellas">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                </div>
            </div>

            <div class="resena">
                <p><strong>Javier:</strong> Fácil de hacer y muy bonito, ideal para ir en familia.</p>
                <div class="estrellas">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                </div>
            </div>

            <div class="resena">
                <p><strong>Sofía:</strong> Bonito pero con poca sombra, mejor evitar mediodía.</p>
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
            <h3>Ubicación: Navarra</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d189278.30422968155!2d-1.6569730072146842!3d42.16155217601477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5a3bfe320a4671%3A0x528d9b2420714efe!2sBardenas%20Reales!5e0!3m2!1ses!2ses!4v1778256712300!5m2!1ses!2ses">
            </iframe>
        </div> 
    </main>
 
    @include('util.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>