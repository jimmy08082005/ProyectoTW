<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Ruta por la Sierra de Gredos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>
    @include('util.cabecera')

    <main class="ficha">
        <a href="/rutasMontana" class="atras">
            Volver a rutas
        </a>

        <h1 class="text-center display-1">Ruta por la Sierra de Gredos</h1>

        <div class="descripcion">
            <img src="{{ asset('img/gredos.jpg') }}" class="img-fluid rounded mb-3" alt="Peñalara">
        
            <h3>Descripción</h3>
            <p>
                La Sierra de Gredos es uno de los destinos de montaña más impresionantes del centro de España.
                Esta ruta recorre paisajes de alta montaña con lagunas glaciares, formaciones rocosas y fauna salvaje como la
                cabra montés.
                Es una ruta exigente pero muy completa, ideal para senderistas con algo de experiencia.
            </p>
        
            <p><strong>Duración:</strong> 5-6 horas</p>
            <p class="dificultad media"><strong>Dificultad:</strong> Media</p>
            <p><strong>Distancia:</strong> 15 km</p>
            <p><strong>Tipo de ruta:</strong> Circular</p>
            <p><strong>Altitud máxima:</strong> 2.592 m (Almanzor)</p>
            <p><strong>Recomendado:</strong> Primavera, verano y otoño</p>
        </div>

        <div class="lista-resenas">
            <h3>Reseñas</h3>

            <div class="resena">
                <p><strong>Diego:</strong> Ruta muy completa, con paisajes increíbles y bastante variedad.</p>
                <div class="estrellas">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                </div>
            </div>

            <div class="resena">
                <p><strong>Paula:</strong> Algo exigente en algunos tramos, pero muy recomendable.</p>
                <div class="estrellas">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                </div>
            </div>

            <div class="resena">
                <p><strong>Claudia:</strong> Perfecta para desconectar y disfrutar de la naturaleza.</p>
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
            <h3>Ubicación: Sierra de Gredos</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13296.930149472186!2d-5.099346133800222!3d40.29971645857224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd3f89be2d37452b%3A0x2f77e1e363a316d4!2sSierra%20de%20Gredos!5e1!3m2!1ses!2ses!4v1777730182598!5m2!1ses!2ses">
            </iframe>
        </div>
    </main>

    @include('util.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>