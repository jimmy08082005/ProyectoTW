<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Ruta del Cares</title>
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

        <h1 class="text-center display-1">Ruta del Cares</h1>

        <div class="descripcion">
            <img src="{{ asset('img/cares.jpg') }}" class="img-fluid rounded mb-3" alt="Cares">
        
            <h3>Descripción</h3>
            <p>
               La Ruta del Cares recorre uno de los desfiladeros más impresionantes de los Picos de Europa. 
               El sendero atraviesa túneles excavados en roca y ofrece vistas espectaculares del río Cares.
            </p>
        
            <p><strong>Duración:</strong> 4-5 horas</p>
            <p class="dificultad baja"><strong>Dificultad:</strong> Baja</p>
            <p><strong>Distancia:</strong> 12 km</p>
            <p><strong>Tipo de ruta:</strong> Lineal</p>
            <p><strong>Altitud máxima:</strong> 700 m</p>
            <p><strong>Recomendado:</strong> Primavera, verano y otoño</p>
        </div>

        <div class="lista-resenas">
            <h3>Reseñas</h3>

            <div class="resena">
                <p><strong>Carlos:</strong> Una de las rutas más bonitas que he hecho.</p>
                <div class="estrellas">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
            </div>

            <div class="resena">
                <p><strong>Mario:</strong> Muy recomendable, aunque suele haber bastante gente.</p>
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
            <h3>Ubicación: Asturias y León</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1453.893855300523!2d-4.902348880977551!3d43.213941793034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd49d01abf9b07b3%3A0x300fbfd3affc5238!2sSenda%20del%20Cares!5e0!3m2!1ses!2ses!4v1778311757816!5m2!1ses!2ses">
            </iframe>
        </div> 
    </main>
 
    @include('util.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>