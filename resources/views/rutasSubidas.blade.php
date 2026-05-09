<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Rutas de la Comunidad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/micss.css') }}">
</head>

<body>
     @include('util.cabecera')

    <h1 class="text-center display-1">Rutas de la Comunidad</h1>

    <main class="lista-rutas-usuario">
        @forelse ($rutas as $ruta)
            <div class="card ruta-listado">
                <img src="{{ asset($ruta->imagen) }}" alt="{{ $ruta->titulo }}">
                <div class="ruta-info card-body">
                    <h5 class="card-title">{{ $ruta->titulo }}</h5>
                    <p><strong>Descripción:</strong> {{ $ruta->descripcion }}</p>
                    <p><strong>Localización:</strong> {{ $ruta->localizacion }}</p>
                    <p><strong>Duración:</strong> {{ $ruta->duracion }} horas</p>
                    <p class="dificultad {{ strtolower($ruta->dificultad) }}">
                        <strong>Dificultad:</strong> {{ $ruta->dificultad }}
                    </p>
                    <p><strong>Subida por:</strong> {{ $ruta->usuario }}</p>
                    <a href="/rutasSubidas/{{ $ruta->id }}" class="btn">Ver detalles</a>
                </div>
            </div>
        @empty
            <p class="text-center">No hay rutas registradas todavía.</p>
        @endforelse
    </main>

    @include('util.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>