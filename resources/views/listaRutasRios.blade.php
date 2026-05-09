<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Rutas de Río</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/micss.css') }}">
</head>

<body>
     @include('util.cabecera')

    <h1 class="text-center display-1">Rutas de Río</h1>

    <main class="lista-aridas">
        <div class="card ruta-listado">
                <img src="{{ asset('img/cares.jpg') }}" alt="Cares">
                <div class="ruta-info card-body">
                    <h5 class="card-title">Ruta del Cares</h5>

                    <p><strong>Descripción:</strong> Ruta junto al río Cares entre desfiladeros, túneles 
                    y paisajes espectaculares de los Picos de Europa.</p>
                    <p><strong>Localización:</strong>  Asturias y León</p>
                    <p><strong>Duración:</strong> 4-5 horas</p>
                    <p class="dificultad baja"><strong>Dificultad:</strong> Baja</p>

                    <a href="/rutasRio/cares" class="btn">Ver detalles</a>
                </div>
        </div>

        <div class="card ruta-listado">
                <img src="{{ asset('img/cabriel.jpg') }}" alt="Cabriel">
                <div class="ruta-info card-body">
                    <h5 class="card-title">Las Chorreras del Cabriel</h5>

                    <p><strong>Descripción:</strong> Ruta refrescante entre pozas naturales, cascadas y 
                    aguas cristalinas del río Cabriel.</p>
                    <p><strong>Localización:</strong> Cuenca - Castilla-La Mancha</p>
                    <p><strong>Duración:</strong> 2-3 horas</p>
                    <p class="dificultad baja"><strong>Dificultad:</strong> Baja</p>

                    <a href="/rutasRio/cabriel" class="btn">Ver detalles</a>
                </div>
        </div>

        <div class="card ruta-listado">
                <img src="{{ asset('img/borosa.jpg') }}" alt="Borosa">
                <div class="ruta-info card-body">
                    <h5 class="card-title">Ruta del Río Borosa</h5>

                    <p><strong>Descripción:</strong>  Sendero junto al río Borosa con pasarelas, cascadas 
                    y piscinas naturales en plena Sierra de Cazorla.</p>
                    <p><strong>Localización:</strong> Jaén - Andalucía</p>
                    <p><strong>Duración:</strong> 4 horas</p>
                    <p class="dificultad baja"><strong>Dificultad:</strong> Baja</p>

                    <a href="/rutasRio/borosa" class="btn">Ver detalles</a>
                </div>
        </div>

        <div class="card ruta-listado">
                <img src="{{ asset('img/algar.jpeg') }}" alt="Algar">
                <div class="ruta-info card-body">
                    <h5 class="card-title">Fuentes del Algar</h5>

                    <p><strong>Descripción:</strong> Ruta corta entre cascadas, pozas y vegetación mediterránea 
                    junto al río Algar.</p>
                    <p><strong>Localización:</strong> Alicante - Comunidad Valenciana</p>
                    <p><strong>Duración:</strong> 1-2 horas</p>
                    <p class="dificultad baja"><strong>Dificultad:</strong> Baja</p>

                    <a href="/rutasRio/algar" class="btn">Ver detalles</a>
                </div>
        </div>
    </main>

    @include('util.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>