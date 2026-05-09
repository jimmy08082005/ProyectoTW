<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ $ruta->titulo }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>
    @include('util.cabecera')

    <main class="ficha">
        <a href="/rutasSubidas" class="atras">
            Volver a rutas
        </a>

        <h1 class="text-center display-1">{{ $ruta->titulo }}</h1>

        <div class="descripcion">
            <img src="{{ asset($ruta->imagen) }}" class="img-fluid rounded mb-3" alt="{{ $ruta->titulo }}">
        
            <h3>Descripción</h3>
            <p>
                {{ $ruta->descripcion }}
            </p>
        
            <p><strong>Duración (horas):</strong> {{ $ruta->duracion }} </p>
            <p class="dificultad {{ strtolower($ruta->dificultad) }}"><strong>Dificultad:</strong> {{ $ruta->dificultad }}</p>
            <p><strong>Distancia:</strong> {{ $ruta->distancia }} km</p>
            <p><strong>Tipo de ruta:</strong> {{ $ruta->tipo_de_ruta }}</p>
        </div>

        <div class="lista-resenas">
            <h3>Reseñas</h3>
            <p class="text-muted">Aún no hay reseñas para esta ruta.</p>
        </div>
    </main>

    @include('util.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>