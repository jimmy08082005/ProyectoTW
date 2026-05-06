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

    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8 p-5 shadow bg-white rounded">

                <h2 class="text-center mb-4">Publicar Nueva Ruta</h2>

                <form method="POST"
                      action="{{ route('guardar-ruta') }}"
                      enctype="multipart/form-data">

                    @csrf

                    <!-- Nombre -->
                    <div class="mb-3">
                        <label class="form-label">Nombre de la ruta</label>
                        <input type="text"
                               class="form-control"
                               name="titulo"
                               required
                               placeholder="Ej: Ruta Sierra Nevada">
                    </div>

                    <!-- Descripción -->
                    <div class="mb-3">
                        <label class="form-label">Descripción</label>
                        <textarea class="form-control"
                                  name="descripcion"
                                  rows="4"
                                  required
                                  placeholder="Describe la ruta..."></textarea>
                    </div>

                    <!-- Ubicación -->
                    <div class="mb-3">
                        <label class="form-label">Ubicación</label>
                        <input type="text"
                               class="form-control"
                               name="ubicacion"
                               required
                               placeholder="Ej: Granada">
                    </div>

                    <!-- Distancia y duración -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Distancia (km)</label>
                            <input type="number"
                                   step="0.1"
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

                    <!-- Tipo -->
                    <div class="mb-3">
                        <label class="form-label">Tipo de entorno</label>
                        <select class="form-select"
                                name="tipo"
                                required>

                            <option value="">Selecciona una opción</option>
                            <option value="montana">Montaña</option>
                            <option value="arida">Zona Árida</option>
                            <option value="rio">Río</option>
                        </select>
                    </div>

                    <!-- Dificultad -->
                    <div class="mb-3">
                        <label class="form-label">Dificultad</label>
                        <select class="form-select"
                                name="dificultad"
                                required>

                            <option value="">Selecciona una opción</option>
                            <option value="facil">Baja</option>
                            <option value="media">Media</option>
                            <option value="alta">Alta</option>
                        </select>
                    </div>

                    <!-- Imagen -->
                    <div class="mb-4">
                        <label class="form-label">Imagen de la ruta</label>
                        <input type="file"
                               class="form-control"
                               name="imagen"
                               accept="image/*"
                               required>
                    </div>

                    <!-- Botones -->
                    <div class="d-grid gap-2">
                        <button type="submit"
                                class="btn">
                            Publicar Ruta
                        </button>

                        <a href="/"
                           class="btn btn-secondary">
                            Volver al inicio
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </main>

    <footer class="text-center py-3">
        <p class="mb-1">© 2026. Todos los derechos reservados.</p>
        <p class="mb-1">Este sitio web y su contenido están protegidos por derechos de autor.</p>
        <a href="/contacto">Contacta</a>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
