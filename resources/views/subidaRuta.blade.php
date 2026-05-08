<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Subir Ruta</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/micss.css') }}">
</head>

<body>

    @include('util.cabecera')

    <main class="container align-center p-5">
        <div class="row justify-content-center">
            <h1 class="text-center display-1">Nueva Ruta</h1>
            <div class="col-md-8 p-5 shadow bg-white rounded">

                <form method="POST" action="{{ route('subidaRuta.store') }}" enctype="multipart/form-data">

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

                    @if (session('success'))
                        <div class="toast-exito">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="mb-3">
                        <label class="form-label">Nombre de la ruta</label>
                        <input type="text"
                               class="form-control"
                               name="titulo"
                               required
                               placeholder="NOmbre de la ruta">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Descripción</label>
                        <textarea class="form-control"
                                  name="descripcion"
                                  rows="4"
                                  placeholder="Describe la ruta..."></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ubicación</label>
                        <input type="text"
                               class="form-control"
                               name="localizacion"
                               required
                               placeholder="Ej: Granada">
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Distancia (km)</label>
                            <input type="number"
                                   step="0.1"
                                   min="0"
                                   class="form-control"
                                   name="distancia"
                                   required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Duración (horas)</label>
                            <input type="number"
                                   step="0.1"
                                   class="form-control"
                                   name="duracion"
                                   required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tipo de entorno</label>
                        <select class="form-select"
                                name="tipo_de_ruta"
                                required>

                            <option value="">Selecciona una opción</option>
                            <option value="montana">Montaña</option>
                            <option value="arida">Zona Árida</option>
                            <option value="rio">Río</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Dificultad</label>
                        <select class="form-select"
                                name="dificultad"
                                required>

                            <option value="">Selecciona una opción</option>
                            <option value="Baja">Baja</option>
                            <option value="Media">Media</option>
                            <option value="Alta">Alta</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Imagen de la ruta</label>
                        <input type="file"
                               class="form-control"
                               name="imagen"
                               accept="image/*"
                               required>
                    </div>

                    <div class="text-center">
                        <button type="submit">Subir Ruta</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    @include('util.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>
</html>
