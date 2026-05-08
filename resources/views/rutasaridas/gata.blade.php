<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Parque Natural de Cabo de Gata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>
    @include('util.cabecera')

    <main class="ficha">
        <a href="/rutasArida" class="atras">
            Volver a rutas
        </a>

        <h1 class="text-center display-1">Parque Natural de Cabo de Gata</h1>

        <div class="descripcion">
            <img src="{{ asset('img/gata.jpg') }}" class="img-fluid rounded mb-3" alt="Gata">
        
            <h3>Descripción</h3>
            <p>
                El Parque Natural de Cabo de Gata-Níjar es un espacio volcánico único en Europa. 
                Combina paisajes áridos, acantilados, playas vírgenes y ramblas secas.
            </p>
        
            <p><strong>Duración:</strong> 4-6 horas</p>
            <p class="dificultad media"><strong>Dificultad:</strong> Media</p>
            <p><strong>Distancia:</strong> 10-14 km</p>
            <p><strong>Tipo de ruta:</strong> Circular / lineal según tramo</p>
            <p><strong>Altitud máxima:</strong> 400 m</p>
            <p><strong>Recomendado:</strong> Todo el año (evitar horas centrales en verano)</p>
        </div>

        <div class="lista-resenas">
            <h3>Reseñas</h3>

            <div class="resena">
                <p><strong>Lucía:</strong> Uno de los lugares más bonitos de España, brutal.</p>
                <div class="estrellas">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
            </div>

            <div class="resena">
                <p><strong>Mario:</strong> Paisajes increíbles, mezcla de mar y desierto.</p>
                <div class="estrellas">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                </div>
            </div>

            <div class="resena">
                <p><strong>Clara:</strong>  Muy bonito, pero en verano hace demasiado calor.</p>
                <div class="estrellas">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                </div>
            </div>
        </div>

        <div class="ubicacion">
            <h3>Ubicación: Almería - Andalucía</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51127.02983731092!2d-2.1800585674472095!3d36.7840147892458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7aeee89adb62c9%3A0x75b0c6c4c02b1393!2sParque%20Natural%20Cabo%20de%20Gata%20-%20N%C3%ADjar%20(Almeria)!5e0!3m2!1ses!2ses!4v1778257979222!5m2!1ses!2ses">
            </iframe>
        </div> 
    </main>
 
    @include('util.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>