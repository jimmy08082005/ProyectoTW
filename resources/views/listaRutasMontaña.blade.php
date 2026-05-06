<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Rutas de Montaña</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/micss.css">
</head>

<body>
     @include('util.cabecera') <main class="container-fluid my-5">

    <main class="lista-montanias">
        <div class="card ruta-listado">
            <div class="ruta-contenido">
                <img src="img/ascensoPeñalara.jpg" alt="Peñalara">
                <div class="ruta-info card-body">
                    <h5 class="card-title">Ascenso al Pico de Peñalara</h5>

                    <p><strong>Descripción:</strong> Ruta de alta montaña con lagunas glaciares y vistas espectaculares
                        de la
                        Sierra de Guadarrama.</p>
                    <p><strong>Localización:</strong> Madrid - Parque Natural de Peñalara</p>
                    <p><strong>Duración:</strong> 5-6 horas</p>
                    <p class="dificultad media"><strong>Dificultad:</strong> Media</p>

                    <a href="rutasmontaña/peñarla.html" class="btn">Ver detalles</a>
                </div>
            </div>
        </div>

        <div class="card ruta-listado">
            <div class="ruta-contenido">
                <img src="img/SenderoPedriza.jpeg" alt="La Pedriza">
                <div class="ruta-info card-body">
                    <h5 class="card-title">Sendero de La Pedriza</h5>

                    <p><strong>Descripción:</strong> Ruta entre formaciones rocosas únicas, ideal para senderismo y
                        pequeñas
                        trepadas.</p>
                    <p><strong>Localización:</strong> Madrid - La Pedriza</p>
                    <p><strong>Duración:</strong> 4 horas</p>
                    <p class="dificultad media"><strong>Dificultad:</strong> Media</p>

                    <a href="rutasmontaña/pedriza.html" class="btn">Ver detalles</a>
                </div>
            </div>
        </div>

        <div class="card ruta-listado">
            <div class="ruta-contenido">
                <img src="img/Ordesa.JPG" alt="Ordesa">
                <div class="ruta-info card-body">
                    <h5 class="card-title">Valle de Ordesa y Monte Perdido</h5>

                    <p><strong>Descripción:</strong> Ruta por valles glaciares, cascadas y bosques en el Pirineo
                        Aragonés.</p>
                    <p><strong>Localización:</strong> Huesca - Parque Nacional de Ordesa</p>
                    <p><strong>Duración:</strong> 6-7 horas</p>
                    <p class="dificultad alta"><strong>Dificultad:</strong> Alta</p>

                    <a href="rutasmontaña/ordesa.html" class="btn">Ver detalles</a>
                </div>
            </div>
        </div>

        <div class="card ruta-listado">
            <div class="ruta-contenido">
                <img src="img/Gredos.jpg" alt="Gredos">
                <div class="ruta-info card-body">
                    <h5 class="card-title">Ruta por la Sierra de Gredos</h5>

                    <p><strong>Descripción:</strong> Ruta hacia la Laguna Grande entre paisajes de alta montaña y picos
                        graníticos.</p>
                    <p><strong>Localización:</strong> Ávila - Sierra de Gredos</p>
                    <p><strong>Duración:</strong> 4-5 horas</p>
                    <p class="dificultad media"><strong>Dificultad:</strong> Media</p>

                    <a href="rutasmontaña/gredos.html" class="btn">Ver detalles</a>
                </div>
            </div>
        </div>
    </main>

    @include('util.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>