<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sendero de La Pedriza</title>
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

        <h1 class="text-center display-1">Sendero de La Pedriza</h1>

        <div class="descripcion">
            <img src="{{ asset('img/pedriza.jpeg') }}" class="img-fluid rounded mb-3" alt="Peñalara">

            <h3>Descripción</h3>
            <p>
                El Sendero de La Pedriza es una de las rutas más emblemáticas de la Sierra de Guadarrama.
                Destaca por sus formaciones rocosas únicas, sus paisajes graníticos y sus vistas panorámicas.
                Es ideal tanto para senderismo como para iniciarse en pequeñas trepadas.
            </p>

            <p><strong>Duración:</strong> 3-4 horas</p>
            <p class="dificultad media"><strong>Dificultad:</strong> Media</p>
            <p><strong>Distancia:</strong> 10 km</p>
            <p><strong>Tipo de ruta:</strong> Circular</p>
            <p><strong>Altitud máxima:</strong> 1.800 m</p>
            <p><strong>Recomendado:</strong> Primavera y otoño</p>
        </div>

        <div class="lista-resenas">
            <h3>Reseñas</h3>

            <div class="resena">
                <p><strong>Carlos:</strong> Ruta muy entretenida, las formaciones rocosas son espectaculares.</p>
                <div class="estrellas">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                </div>
            </div>

            <div class="resena">
                <p><strong>Javier:</strong> Bonita ruta, pero algo concurrida los fines de semana.</p>
                <div class="estrellas">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                </div>
            </div>

            <div class="resena">
                <p><strong>Lucía:</strong> Me encantó el paisaje, muy diferente a otras rutas de montaña.</p>
                <div class="estrellas">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
            </div>

            <div class="resena">
                <p><strong>Raúl:</strong> Buena ruta para iniciarse en montaña, sin ser demasiado exigente.</p>
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
            <h3>Ubicación: La Pedriza</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105504.38070486438!2d-4.0266765745733!3d40.84984171145473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd416500a88f2d41%3A0xc966cd716dd47529!2sLa%20Pedriza!5e1!3m2!1ses!2ses!4v1777728183113!5m2!1ses!2ses">
            </iframe>
        </div>
    </main>

    @include('util.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>