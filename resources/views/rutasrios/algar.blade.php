<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Fuentes del Algar</title>
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

        <h1 class="text-center display-1">Fuentes del Algar</h1>

        <div class="descripcion">
            <img src="{{ asset('img/algar.jpeg') }}" class="img-fluid rounded mb-3" alt="Algar">
        
            <h3>Descripción</h3>
            <p>
               Las Fuentes del Algar son un paraje natural con cascadas, pequeñas pozas y vegetación mediterránea. 
               Es una ruta corta y muy popular por sus aguas cristalinas.
            </p>
        
            <p><strong>Duración:</strong> 1-2 horas</p>
            <p class="dificultad baja"><strong>Dificultad:</strong> Baja</p>
            <p><strong>Distancia:</strong> 3 km</p>
            <p><strong>Tipo de ruta:</strong> Lineal</p>
            <p><strong>Altitud máxima:</strong> 350 m</p>
            <p><strong>Recomendado:</strong> Primavera y verano</p>
        </div>

        <div class="lista-resenas">
            <h3>Reseñas</h3>

            <div class="resena">
                <p><strong>Iván:</strong> Muy accesible y perfecto para ir con niños.</p>
                <div class="estrellas">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                </div>
            </div>

            <div class="resena">
                <p><strong>Claudia:</strong> Lugar precioso para pasar el día y bañarse.</p>
                <div class="estrellas">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
            </div>

            <div class="resena">
                <p><strong>Nuria:</strong> Bonito sitio, aunque algo turístico.</p>
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
            <h3>Ubicación: Alicante - Comunidad Valenciana</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d33269.937546823094!2d-0.11536962445884145!3d38.659531781213126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd61f89875c768d5%3A0x8bc5c3fbd5537413!2sLes%20Fonts%20d&#39;Algar!5e0!3m2!1ses!2ses!4v1778313159704!5m2!1ses!2ses">
            </iframe>
        </div> 
    </main>
 
    @include('util.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>