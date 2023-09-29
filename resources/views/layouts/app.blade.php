<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/scripts.js') }}"></script>

    
    <title>Casa Aldaba</title>
</head>
<body>
    <div class="hero">
        <h4>Hola Artesano</h4>
        <p>¡Explora y descubre!</p>
    </div>
    <header class="header">
        <nav class="navbar">
            <ul class="nav-list">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>

    </header>


    <main>
        @yield('content') <!-- Aquí se incluirá el contenido de cada vista -->
    </main>


<!-- Agrega esto al final del archivo `welcome.blade.php` antes del cierre de `</body>` -->
<div class="whatsapp-button">
    <a href="https://api.whatsapp.com/send?phone=+51 996 372 728" target="_blank">
        <img src="https://th.bing.com/th/id/R.f5a344f6f4d887788de101a8a6fbc55e?rik=HmE275GCK4VCdg&pid=ImgRaw&r=0" alt="WhatsApp">
        <div class="message">Escríbenos</div>
    </a>
</div>



    <footer class="footer">
        <p>&copy; {{ date('Y') }} casaldaba.pe</p>
    </footer>
</body>
</html>