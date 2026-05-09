<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Rutas de Zona Árida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/micss.css') }}">
</head>

<body>
     @include('util.cabecera')

    <h1 class="text-center display-1">Rutas de zona Árida</h1>

    <main class="lista-aridas">
        <div class="card ruta-listado">
                <img src="{{ asset('img/tabernas.jpg') }}" alt="Tabernas">
                <div class="ruta-info card-body">
                    <h5 class="card-title">Desierto de Tabernas</h5>

                    <p><strong>Descripción:</strong> El único desierto árido de Europa, con paisajes cinematográficos y 
                    formaciones erosionadas únicas.</p>
                    <p><strong>Localización:</strong>  Almería - Andalucía</p>
                    <p><strong>Duración:</strong> 3-4 horas</p>
                    <p class="dificultad media"><strong>Dificultad:</strong> Media</p>

                    <a href="/rutasArida/tabernas" class="btn">Ver detalles</a>
                </div>
        </div>

        <div class="card ruta-listado">
                <img src="{{ asset('img/bardenas.jpg') }}" alt="Bardenas">
                <div class="ruta-info card-body">
                    <h5 class="card-title">Bardenas Reales</h5>

                    <p><strong>Descripción:</strong> Parque semidesértico con barrancos, planicies 
                    y formaciones de arcilla erosionadas.</p>
                    <p><strong>Localización:</strong> Navarra</p>
                    <p><strong>Duración:</strong> 4-5 horas</p>
                    <p class="dificultad baja"><strong>Dificultad:</strong> Baja</p>

                    <a href="/rutasArida/bardenas" class="btn">Ver detalles</a>
                </div>
        </div>

        <div class="card ruta-listado">
                <img src="{{ asset('img/gorafe.jpg') }}" alt="Gorafe">
                <div class="ruta-info card-body">
                    <h5 class="card-title">Desierto de Gorafe</h5>

                    <p><strong>Descripción:</strong> Paisaje semiárido con cañones, badlands y vistas 
                    espectaculares del Geoparque de Granada.</p>
                    <p><strong>Localización:</strong> Granada - Andalucía</p>
                    <p><strong>Duración:</strong> 3-4 horas</p>
                    <p class="dificultad media"><strong>Dificultad:</strong> Media</p>

                    <a href="/rutasArida/gorafe" class="btn">Ver detalles</a>
                </div>
        </div>

        <div class="card ruta-listado">
                <img src="{{ asset('img/gata.jpg') }}" alt="Cabo de Gata">
                <div class="ruta-info card-body">
                    <h5 class="card-title">Parque Natural de Cabo de Gata</h5>

                    <p><strong>Descripción:</strong> Paisaje volcánico y árido con acantilados, 
                    ramblas secas y costa desértica.</p>
                    <p><strong>Localización:</strong> Almería - Andalucía</p>
                    <p><strong>Duración:</strong> 4-6 horas</p>
                    <p class="dificultad media"><strong>Dificultad:</strong> Media</p>

                    <a href="/rutasArida/gata" class="btn">Ver detalles</a>
                </div>
        </div>
    </main>

    @include('util.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>