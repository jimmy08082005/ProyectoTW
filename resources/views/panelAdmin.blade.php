<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Panel de Guía</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>
     @include('util.cabecera')

    <main class="container-fluid my-5">
        <h1 class="text-center display-1">Panel de Guia</h1>

        <div class="validar-rutas">
            <h3>Validar Rutas</h3>
                @if (session('success'))
                    <div class="toast-exito">{{ session('success') }}</div>
                @endif

                @forelse ($rutasSinValidar as $ruta)
                    <div class="card ruta-listado position-relative">
                        <img src="{{ asset($ruta->imagen) }}" alt="{{ $ruta->titulo }}">
                        <div class="ruta-info card-body d-flex justify-content-between align-items-start">
                            <div>
                                <h5 class="card-title">{{ $ruta->titulo }}</h5>
                                <p><strong>Subida por:</strong> {{ $ruta->usuario }}</p>
                                <a class="btn" href="/rutasSubidas/{{ $ruta->id }}">Ver Ruta</a>
                            </div>
                            <div class="d-flex gap-3 fs-4">
                                <form method="POST" action="{{ route('admin.validar', $ruta->id) }}">
                                    @csrf
                                    <button type="submit" class="btn-icono text-success" title="Validar ruta">
                                        <i class="bi bi-check-circle"></i>
                                    </button>
                                </form>
                                <form method="POST" action="{{ route('admin.invalidar', $ruta->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-icono text-danger" title="Eliminar ruta">
                                        <i class="bi bi-x-circle"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-muted">No hay rutas pendientes de validar.</p>
                @endforelse
        </div>

        <div class="rutas-oficiales">
            <h3>Rutas oficiales</h3>
                @forelse ($rutasValidadasList as $validacion)
                    <div class="card ruta-listado">
                        <img src="{{ asset($validacion->ruta->imagen) }}" alt="{{ $validacion->ruta->titulo }}">
                        <div class="ruta-info card-body d-flex justify-content-between align-items-start">
                            <div>
                                <h5 class="card-title">{{ $validacion->ruta->titulo }}</h5>
                                <p><strong>Subida por:</strong> {{ $validacion->ruta->usuario }}</p>
                                <a class="btn" href="/rutasSubidas/{{ $validacion->ruta->id }}">
                                    Ver Ruta
                                </a>
                            </div>
                            <form method="POST" action="{{ route('admin.oficial', $validacion->ruta_id) }}">
                                @csrf
                                <button type="submit" class="btn-icono fs-4" title="Marcar como oficial">
                                    @if ($validacion->ruta_oficial)
                                        <i class="bi bi-award-fill text-warning" title="Quitar oficial"></i>
                                    @else
                                        <i class="bi bi-award text-secondary" title="Marcar como oficial"></i>
                                    @endif
                                </button>
                            </form>
                        </div>
                    </div>
                @empty
                    <p class="text-muted">No hay rutas validadas todavía.</p>
                @endforelse
        </div>
    </main>

    @include('util.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>


</html>