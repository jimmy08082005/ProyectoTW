<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Panel de Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>
     @include('util.cabecera')

    <main class="container-fluid my-5">
        <h1 class="text-center display-1">Panel de Usuario</h1>

        <h4 class="alerta-bienvenida">¡Bienvenido, {{ auth()->user()->name }}!</h4>

        <div class="lista-subidas">
            <h3>Rutas Subidas</h3>
                <div class="row g-3 w-100">
                    @forelse ($rutas as $ruta)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card h-100">
                                <img src="{{ asset($ruta->imagen) }}" class="card-img-top" alt="{{ $ruta->titulo }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $ruta->titulo }}</h5>
                                </div>
                                <a class="btn" href="/rutasSubidas/{{ $ruta->id }}">Ver Ruta</a>
                                <a class="btn" href="{{ route('rutasSubidas.editar', $ruta->id) }}">Editar</a>
                            </div>
                        </div>
                    @empty
                        <p class="text-muted">Aún no has subido ninguna ruta.</p>
                    @endforelse
                </div>   
        </div>

        <div class="lista-favoritos">
            <h3>Rutas Favoritas</h3>
            <div class="row g-2 w-100">
                @forelse ($favoritos as $favorito)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card h-100">
                            <img src="{{ asset($favorito->ruta->imagen) }}" class="card-img-top" alt="{{ $favorito->ruta->titulo }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $favorito->ruta->titulo }}</h5>
                            </div>
                            <a class="btn" href="/rutasSubidas/{{ $favorito->ruta->id }}">Ver Ruta</a>
                        </div>
                    </div>
                @empty
                    <p class="text-muted">Aún no tienes rutas favoritas.</p>
                @endforelse
            </div>
        </div>

        <div class="lista-resenas">
            <h3>Reseñas</h3>
            @forelse ($resenas as $resena)
                <div class="resena">
                    <p class="mb-1">
                        <strong>Ruta:</strong>
                         <a class="enlace-registrate" href="{{ route('rutasSubidas.mostrarDetallesRuta', $resena->ruta->id) }}">
                            {{ $resena->ruta->titulo }}
                        </a>
                    </p>

                    <p>
                        <strong>{{ $resena->usuario }}:</strong>
                        {{ $resena->descripcion }}
                    </p>

                    <div class="estrellas">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= floor($resena->valoracion))
                                <i class="bi bi-star-fill"></i>
                            @else
                                <i class="bi bi-star"></i>
                            @endif
                        @endfor
                    </div>

                    @if ($resena->fotografias->count() > 0)
                        <div class="d-flex gap-2 flex-wrap mt-2">
                            @foreach ($resena->fotografias as $foto)
                                <a href="{{ asset($foto->imagen) }}" target="_blank">
                                    <img src="{{ asset($foto->imagen) }}"
                                        width="100"
                                        class="rounded">
                                </a>
                            @endforeach
                        </div>
                    @endif
                </div>

            @empty

                <p class="text-muted">
                    Aún no hay reseñas para esta ruta.
                </p>

            @endforelse
        </div>
    </main>

    @include('util.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>