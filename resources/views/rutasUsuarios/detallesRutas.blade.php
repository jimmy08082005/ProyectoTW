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

        <h1 class="text-center display-1">
            {{ $ruta->titulo }}
            @if ($validacion && $validacion->ruta_oficial)
                <img src="{{ asset('img/oficial.png') }}" class="icono-detalle" width="98" height="98" alt="Ruta oficial">
            @endif
        </h1>

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

            @auth
                <form method="POST" action="{{ route('favoritos.ajustarFavorito', $ruta->id) }}">
                    @csrf
                    <button type="submit" class="btn-favorito">
                        @if ($esFavorito)
                            <i class="bi bi-heart-fill"></i> Quitar de favoritos
                        @else
                            <i class="bi bi-heart"></i> Añadir a favoritos
                        @endif
                    </button>
                </form>
            @endauth

            @if ($validacion)
                <p><em>Ruta verificada por un administrador</em></p>
            @endif
        </div>

        <div class="lista-resenas">
            <h3>Publica tu Reseña</h3>

            @auth
                <form method="POST" action="{{ route('resena.store', $ruta->id) }}" enctype="multipart/form-data">
                    @csrf

                    @if ($errors->any())
                        <div class="alert alert-danger mb-3">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="mb-3">
                        <label class="form-label">Tu reseña</label>
                        <textarea class="form-control" name="descripcion" rows="3" required
                                placeholder="Escribe tu experiencia..."></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Valoración</label>
                        <div class="rating">
                            <input type="radio" name="valoracion" id="star-5" class="rating-radio" value="5">
                            <label for="star-5"><i class="bi bi-star-fill"></i></label>
                            <input type="radio" name="valoracion" id="star-4" class="rating-radio" value="4">
                            <label for="star-4"><i class="bi bi-star-fill"></i></label>
                            <input type="radio" name="valoracion" id="star-3" class="rating-radio" value="3">
                            <label for="star-3"><i class="bi bi-star-fill"></i></label>
                            <input type="radio" name="valoracion" id="star-2" class="rating-radio" value="2">
                            <label for="star-2"><i class="bi bi-star-fill"></i></label>
                            <input type="radio" name="valoracion" id="star-1" class="rating-radio" value="1">
                            <label for="star-1"><i class="bi bi-star-fill"></i></label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Fotografías (opcional, puedes subir varias)</label>
                        <input type="file" class="form-control" name="imagenes[]"
                            accept="image/*" multiple>
                    </div>

                    <button type="submit" class="btn">Publicar reseña</button>
                </form>
            @else
                <p class="text-muted"><a class="enlace-registrate" href="/login">Inicia sesión</a> para escribir una reseña.</p>
            @endauth
        </div>

        <div class="lista-resenas">
            <h3>Reseñas</h3>
            @forelse ($resenas as $resena)
                <div class="resena">
                    <p><strong>{{ $resena->usuario }}:</strong> {{ $resena->descripcion }}</p>
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
                                    <img src="{{ asset($foto->imagen) }}" width="100" class="rounded">
                                </a>
                            @endforeach
                        </div>
                    @endif
                </div>
            @empty
                <p class="text-muted">Aún no hay reseñas para esta ruta.</p>
            @endforelse
        </div>

        <div class="ubicacion">
            <h3>Ubicación: {{ $ruta->localizacion }}</h3>
            <iframe
                src="https://www.google.com/maps?q={{ urlencode($ruta->localizacion) }}&output=embed">
            </iframe>
        </div>
    </main>

    

    @include('util.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>