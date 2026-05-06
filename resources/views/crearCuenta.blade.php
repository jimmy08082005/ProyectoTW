<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/micss.css">
</head>

<body>
    
    @include('util.cabecera') <main class="container-fluid my-5">

    <main class="container align-center p-5">
        <form method="POST" action="{{route('validar-registro')}}">
            @csrf
          <div class="mb-3">
            <label for="emailInput" class="form-label">Email</label>
            <input type="email" class="form-control" id="emailInput"
            name="email" required autocomplete="disable">
          </div>
          <div class="mb-3">
            <label for="passwordInput" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="passwordInput"
            name="password" required>
          </div>
          <div class="mb-3">
            <label for="userInput" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="userInput"
            name="name" required autocomplete="disable">
          </div>
          <button type="submit" class="btn btn-primary">Crear Cuenta</button>
        </form>
    </main>

    @include('util.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>