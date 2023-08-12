<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Preguntas</title>
    <!-- Agrega tus enlaces a hojas de estilo aquí -->
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                CRUD de Preguntas
            </a>
            <!-- Agrega aquí tus elementos de navegación, autenticación, etc. -->
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>

    <!-- Agrega tus scripts aquí -->
</body>
</html>
