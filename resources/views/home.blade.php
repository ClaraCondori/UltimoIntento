<!doctype html>
<html lang="en">
  <head>
    <script>
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/sw.js')
        .then(registration => {
            console.log('Service Worker registrado con éxito:', registration);
        })
        .catch(error => {
            console.error('Error al registrar el Service Worker:', error);
        });
    }
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu Principal</title>
    <link rel="stylesheet" href="{{ asset('css/loader.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('product.index') }}">Nuestros Productos</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/chat">Consultas</a>
                </li>
            </ul>
            <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Cerrar Sesión</button>
            </form>
            </div>
        </div>
    </nav>
        <div class="container">
        <h1> Bienvenido, {{ Auth::user()->name }}</h1>
    </div>
    <div class="container">
        <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum a inventore quo commodi doloremque? Adipisci laboriosam minus facere suscipit ex praesentium, totam a amet consectetur autem vitae voluptate nostrum animi?</h2>
    </div>
    <div class="loader-wrapper">
    <span class="loader">
        <span class="loader-inner"></span></span>
    </div>
    <script>
        $(window).on("load", function(){
            $(".loader-wrapper").fadeOut("slow");
        });
    </script>
</body>
<footer>
    <div class="container">
        <form action="{{route('enviarcorreo')}}" method="POST">
        @csrf
        <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
    <input type="text" name="nombre "class="form-control" id="nombre" placeholder="Juan Perez">
    </div>
    <div class="container">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Asunto</label>
    <input type="text" name="asunto" class="form-control" id="asunto" placeholder="asunto">
    </div>
    <div class="container">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Correo Electronico</label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@gmail.com">
    </div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
    <textarea class="form-control" name="mensaje" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="mb-3">
    <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
        </form>
    </div>
</footer>
</html>