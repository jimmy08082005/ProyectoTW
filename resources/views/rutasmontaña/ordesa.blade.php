<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Valle de Ordesa y Monte Perdido</title>
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

        <h1 class="text-center display-1">Valle de Ordesa y Monte Perdido</h1>

        <div class="descripcion">
            <img src="{{ asset('img/ordesa.JPG') }}" class="img-fluid rounded mb-3" alt="Peñalara">
        
            <h3>Descripción</h3>
            <p>
                El Parque Nacional de Ordesa y Monte Perdido es uno de los espacios naturales más impresionantes de España.
                La ruta recorre valles glaciares, cascadas espectaculares y bosques frondosos, ofreciendo paisajes únicos
                en pleno Pirineo Aragonés. Es una ruta exigente, ideal para senderistas con experiencia.
            </p>
        
            <p><strong>Duración:</strong> 6-7 horas</p>
            <p class="dificultad alta"><strong>Dificultad:</strong> Alta</p>
            <p><strong>Distancia:</strong> 18 km</p>
            <p><strong>Tipo de ruta:</strong> Lineal / ida y vuelta</p>
            <p><strong>Altitud máxima:</strong> 3.355 m (Monte Perdido)</p>
            <p><strong>Recomendado:</strong> Verano y principios de otoño</p>
        </div>

        <div class="lista-resenas">
            <h3>Reseñas</h3>

            <div class="resena">
                <p><strong>Álvaro:</strong> Ruta espectacular, de las mejores que he hecho en España.</p>
                <div class="estrellas">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
            </div>

            <div class="resena">
                <p><strong>Elena:</strong> Muy dura pero merece totalmente la pena por las vistas.</p>
                <div class="estrellas">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                </div>
            </div>

            <div class="resena">
                <p><strong>David:</strong> Increíbles cascadas y paisajes, pero no es para principiantes.</p>
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
            <h3>Ubicación: Valle de Ordesa y Monte Perdido</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25647.384637951887!2d-0.03295356339812507!3d42.64814587043782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd57f97fef4bbd47%3A0x67660d37ea442976!2sParque%20Nacional%20de%20Ordesa%20y%20Monte%20Perdido!5e1!3m2!1ses!2ses!4v1777729738315!5m2!1ses!2ses">
            </iframe>
        </div>
    </main>

    @include('util.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>