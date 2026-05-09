<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Ruta del Río Borosa</title>
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

        <h1 class="text-center display-1">Ruta del Río Borosa</h1>

        <div class="descripcion">
            <img src="{{ asset('img/borosa.jpg') }}" class="img-fluid rounded mb-3" alt="Borosa">
        
            <h3>Descripción</h3>
            <p>
               La Ruta del Río Borosa atraviesa uno de los paisajes más bonitos de la Sierra de Cazorla. 
               Cuenta con cascadas, puentes de madera y piscinas naturales de aguas transparentes.
            </p>
        
            <p><strong>Duración:</strong> 4 horas</p>
            <p class="dificultad facil"><strong>Dificultad:</strong> Baja</p>
            <p><strong>Distancia:</strong> 10 km</p>
            <p><strong>Tipo de ruta:</strong> Lineal</p>
            <p><strong>Altitud máxima:</strong> 850 m</p>
            <p><strong>Recomendado:</strong> Primavera y otoño</p>
        </div>

        <div class="lista-resenas">
            <h3>Reseñas</h3>

            <div class="resena">
                <p><strong>Paula:</strong> Las pasarelas y cascadas son impresionantes.</p>
                <div class="estrellas">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                </div>
            </div>

            <div class="resena">
                <p><strong>Jorge:</strong> Muy recomendable para principiantes.</p>
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
            <h3>Ubicación: Jaén - Andalucía</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12573.528361017607!2d-2.880542278289812!3d38.01487094369047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6f0900dcca96e5%3A0xcd01689e4565ddd2!2sRuta%20R%C3%ADo%20Borosa!5e0!3m2!1ses!2ses!4v1778312823809!5m2!1ses!2ses">
            </iframe>
        </div> 
    </main>
 
    @include('util.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>