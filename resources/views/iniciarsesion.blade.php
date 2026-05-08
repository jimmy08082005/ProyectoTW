<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

@if (session('error'))
    <div class="toast-aviso">
        {{ session('error') }}
    </div>
@endif

<style>
    .toast-aviso {
        position: fixed;
        bottom: 300px;
        left: 50%;
        transform: translateX(-50%);
        background-color:rgb(255, 0, 0);
        color: white;
        padding: 14px 28px;
        border-radius: 8px;
        font-size: 15px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        z-index: 9999;
        animation: desvanecer 1s ease 3s forwards;
    }

    @keyframes desvanecer {
        from { opacity: 1; }
        to   { opacity: 0; }
    }
</style>

<body>
    
    @include('util.cabecera')

    <main class="container align-center p-5">
        <form method="POST" action="{{route('inicia-sesion')}}">
            @csrf
            <div class="mb-3">
                <label for="emailInput" class="form-label">Email</label>
                <input type="email" class="form-control" id="emailInput"
                name="email" required>
            </div>

            <div class="mb-3">
                <label for="passwordInput" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="passwordInput"
                name="password" required>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="rememberCheck"
                name="remember">
                <label class="form-check label" for="rememberCheck">
                Mantener sesión iniciada</label>
            </div>
            <div>
                <p>¿No tienes cuenta? <a href="{{route('registro')}}">
                Regístrate</a></p>
            </div>
            <button type="submit">Acceder</button>
        </form>
    </main>

    @include('util.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>