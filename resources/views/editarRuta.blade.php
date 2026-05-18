<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Editar Ruta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/micss.css') }}">
</head>
<body>
    @include('util.cabecera')

    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8 p-5 shadow bg-white rounded">

                <h2 class="text-center mb-4">Editar Ruta</h2>

                <form method="POST" action="{{ route('rutasSubidas.actualizar', $ruta->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

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
                        <label class="form-label">Nombre de la ruta</label>
                        <input type="text" class="form-control" name="titulo"
                               value="{{ $ruta->titulo }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Descripción</label>
                        <textarea class="form-control" name="descripcion" rows="4" required>{{ $ruta->descripcion }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ubicación</label>
                        <input type="text" class="form-control" name="localizacion"
                               value="{{ $ruta->localizacion }}" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Distancia (km)</label>
                            <input type="number" step="0.1" min="0" class="form-control"
                                   name="distancia" value="{{ $ruta->distancia }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Duración (horas)</label>
                            <input type="number" step="0.1" min="0" class="form-control"
                                   name="duracion" value="{{ $ruta->duracion }}" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tipo de entorno</label>
                        <select class="form-select" name="tipo_de_ruta" required>
                            <option value="montaña" {{ $ruta->tipo_de_ruta == 'montana' ? 'selected' : '' }}>Montaña</option>
                            <option value="arida" {{ $ruta->tipo_de_ruta == 'arida' ? 'selected' : '' }}>Zona Árida</option>
                            <option value="rio" {{ $ruta->tipo_de_ruta == 'rio' ? 'selected' : '' }}>Río</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Dificultad</label>
                        <select class="form-select" name="dificultad" required>
                            <option value="Baja" {{ $ruta->dificultad == 'Baja' ? 'selected' : '' }}>Baja</option>
                            <option value="Media" {{ $ruta->dificultad == 'Media' ? 'selected' : '' }}>Media</option>
                            <option value="Alta" {{ $ruta->dificultad == 'Alta' ? 'selected' : '' }}>Alta</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Imagen actual</label>
                        <img src="{{ asset($ruta->imagen) }}" class="d-block mb-2 rounded" height="150">
                        <label class="form-label">Cambiar imagen (opcional)</label>
                        <input type="file" class="form-control" name="imagen" accept="image/*">
                    </div>

                    <div class="text-center mb-3">
                        <button type="submit">Guardar cambios</button>
                    </div>

                    <div class="text-center">
                        <button type="submit" href="{{ route('panelUsuario') }}">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </main>

    @include('util.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
