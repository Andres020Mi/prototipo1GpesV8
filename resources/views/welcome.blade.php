<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GPES - Gestión de Préstamos de Equipos y Herramientas</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f9fa;
        }
        .feature-icon {
            font-size: 3rem;
            color: #007bff;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <x-application-logo2 class="block h-10 w-auto fill-current text-gray-600" />
            <a class="navbar-brand" href="#" style="margin-left: 20px">GPES</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    {{-- Sección Principal --}}
    <header class="container text-center mt-5">
        <h1 class="display-4 fw-bold">Bienvenido a GPES</h1>
        <p class="lead">La mejor solución para gestionar el préstamo de equipos y herramientas de laboratorio.</p>
        <a href="{{ route('login') }}" class="btn btn-primary btn-lg">
            <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
        </a>
        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="btn btn-secondary btn-lg">
                <i class="fas fa-user-plus"></i> Registrarse
            </a>
        @endif
    </header>

    {{-- Sección de Características --}}
    <section class="container mt-5">
        <div class="row text-center">
            <div class="col-md-4">
                <i class="fas fa-clock feature-icon"></i>
                <h4 class="mt-3">Gestión en Tiempo Real</h4>
                <p>Consulta y administra préstamos y devoluciones en tiempo real.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-shield-alt feature-icon"></i>
                <h4 class="mt-3">Seguridad y Control</h4>
                <p>Accede con seguridad y mantiene un registro detallado de los movimientos.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-users feature-icon"></i>
                <h4 class="mt-3">Fácil de Usar</h4>
                <p>Interfaz intuitiva para un acceso rápido y eficiente.</p>
            </div>
        </div>
    </section>

    {{-- Sección de Contacto --}}
    <section class="container text-center mt-5 mb-5">
        <h2>¿Tienes dudas?</h2>
        <p>Ponte en contacto con nuestro equipo para obtener más información.</p>
        <a href="mailto:soporte@gpes.com" class="btn btn-outline-dark">
            <i class="fas fa-envelope"></i> Contactar Soporte
        </a>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
