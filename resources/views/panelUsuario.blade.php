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

        <div class="lista-favoritos">
            <h3>Mis Favoritos</h3>

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