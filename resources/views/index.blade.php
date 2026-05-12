<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    @include('util.cabecera')

    <main class="container-fluid my-5">
        <div class="rutas-index">
            <div class="card">
                <img src="{{ asset('img/rutaMontaña.jpg') }}" class="card-img-top" alt="rutas de montaña">
                <div class="card-body">
                    <h5 class="card-title">Rutas de Montaña</h5>
                    <p class="card-text">Ruta perfecta para los amantes de la montaña...</p>
                    <p class="dificultad alta"><strong>Dificultad:</strong> Alta/Media</p>
                </div>
                <a class="btn" href="/rutasMontana">
                    Ver Rutas
                </a>
            </div>

            <div class="card">
                <img src="{{ asset('img/rutaArida.jpg') }}" class="card-img-top" alt="rutas de zonas aridas">
                <div class="card-body">
                    <h5 class="card-title">Rutas de Zona Árida</h5>
                    <p class="card-text">Ruta perfecta para los amantes de zonas áridas...</p>
                    <p class="dificultad media"><strong>Dificultad:</strong> Media/Baja</p>
                </div>
                <a class="btn" href="/rutasArida">
                    Ver Rutas
                </a>
            </div>

            <div class="card">
                <img src="{{ asset('img/rutaRio.jpg') }}" class="card-img-top" alt="rutas de rio">
                <div class="card-body">
                    <h5 class="card-title">Rutas de Río</h5>
                    <p class="card-text">Ruta perfecta para los amantes de los ríos..</p>
                    <p class="dificultad baja"><strong>Dificultad:</strong> Baja</p>
                </div>
                <a class="btn" href="/rutasRio">
                    Ver Rutas
                </a>
            </div>
        </div>

        <section class="container-fluid my-5">
            <div class="lista-rutas-subidas">
                <h3 class="text-center mb-4">
                    Rutas Oficiales
                </h3>

                <div class="rutas-index">
                    @forelse ($rutasOficiales as $validacion)
                        <div class="card position-relative">
                            <img src="{{ asset('img/oficial.png') }}"
                            class="icono-oficial"
                            alt="Ruta oficial">
                            <img src="{{ asset($validacion->ruta->imagen) }}"
                                class="card-img-top"
                                alt="{{ $validacion->ruta->titulo }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">
                                    {{ $validacion->ruta->titulo }}
                                </h5>

                                <p class="card-text">
                                    {{ Str::limit($validacion->ruta->descripcion, 100) }}
                                </p>

                                <p>
                                    <strong>Localización:</strong>
                                    {{ $validacion->ruta->localizacion }}
                                </p>

                                <p class="dificultad {{ strtolower($validacion->ruta->dificultad) }}">
                                    <strong>Dificultad:</strong>
                                    {{ $validacion->ruta->dificultad }}
                                </p>

                                <p>
                                    <strong>Distancia:</strong>
                                    {{ $validacion->ruta->distancia }} km
                                </p>

                                <a class="btn" href="/rutasSubidas/{{ $validacion->ruta->id }}">
                                    Ver Ruta
                                </a>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-muted">
                            No hay rutas oficiales todavía.
                        </p>
                    @endforelse
                </div>
            </div>
        </section>
    </main>

    @include('util.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>
