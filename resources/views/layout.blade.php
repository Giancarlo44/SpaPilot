<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>SPA Pilot - Sistema Web</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: auto; padding: 20px; }
        header, footer { background: #4CAF50; color: white; padding: 10px; text-align: center; }
        nav a { margin: 0 10px; color: #4CAF50; text-decoration: none; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        .success { background-color: #d4edda; padding: 10px; margin-bottom: 10px; border: 1px solid #c3e6cb; color: #155724; }
        form label { display: block; margin-top: 10px; }
        form input, form textarea, form select { width: 100%; padding: 8px; margin-top: 5px; }
        form button { margin-top: 15px; padding: 10px 20px; background: #4CAF50; color: white; border: none; cursor: pointer; }
        form button:hover { background: #45a049; }
    </style>
</head>
<body>

<header>
    <h1>SPA Pilot</h1>
    <nav>
        <a href="/"style="color: white;">Inicio</a>
        <a href="/servicios"style="color: white;">Servicios</a>
        <a href="/reservar"style="color: white;">Reservar</a>
        <a href="/contacto"style="color: white;">Contacto</a>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    &copy; 2025 SPA Pilot - Todos los derechos reservados
</footer>

</body>
</html>
