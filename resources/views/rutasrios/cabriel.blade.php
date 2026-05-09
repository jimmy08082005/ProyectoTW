<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Las Chorreras del Cabriel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>
    @include('util.cabecera')

    <main class="ficha">
        <a href="/rutasRio" class="atras">
            Volver a rutas
        </a>

        <h1 class="text-center display-1">Las Chorreras del Cabriel</h1>

        <div class="descripcion">
            <img src="{{ asset('img/cabriel.jpg') }}" class="img-fluid rounded mb-3" alt="Cabriel">
        
            <h3>Descripción</h3>
            <p>
               Ruta sencilla junto al río Cabriel que atraviesa cascadas, pozas naturales y pequeñas pasarelas. 
               Ideal para disfrutar de la naturaleza y refrescarse en verano.
            </p>
        
            <p><strong>Duración:</strong> 2-3 horas</p>
            <p class="dificultad baja"><strong>Dificultad:</strong> Baja</p>
            <p><strong>Distancia:</strong> 6 km</p>
            <p><strong>Tipo de ruta:</strong> Circular</p>
            <p><strong>Altitud máxima:</strong> 1.000 m</p>
            <p><strong>Recomendado:</strong> Primavera y verano</p>
        </div>

        <div class="lista-resenas">
            <h3>Reseñas</h3>

            <div class="resena">
                <p><strong>David:</strong> Perfecta para hacer en familia y bañarse.</p>
                <div class="estrellas">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                </div>
            </div>

            <div class="resena">
                <p><strong>Sara:</strong> Perfecta para hacer en familia y bañarse.</p>
                <div class="estrellas">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                </div>
            </div>

             <div class="resena">
                <p><strong>Lucía:</strong> Agua cristalina y paisaje precioso.</p>
                <div class="estrellas">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
            </div>
        </div>

        <div class="ubicacion">
            <h3>Ubicación: Cuenca - Castilla-La Mancha</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3069.558007891578!2d-1.621715423810995!3d39.70464069867136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd676c163cf97c23%3A0x362a75e623ef9d55!2sChorreras%20del%20Cabriel!5e0!3m2!1ses!2ses!4v1778312220205!5m2!1ses!2ses">
            </iframe>
        </div> 
    </main>
 
    @include('util.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>