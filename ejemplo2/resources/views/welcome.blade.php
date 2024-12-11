<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <title>Laravel-sesion2</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/misestilos.css')}}">
</head>

<body>
    <header>
        <div class = "container text-center card border-suess my2">
        <h1 class = text-info>Laravel - sesion2 - Johaneris Avalos</h1>
        </div>
        <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Joha</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('pagina1' )}}">pagina 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('pagina2')}}">pagina 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contacto')}}">contacto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
        </div>
        
    </header>
    <main>

    <div class="container">
        <!-- espacio a reservar para un nuevo contenidlo y va a ser el que mande a llamar en mis anclas -->
        @yield('content')
    </div>

    </main>
    <footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </footer>
</body>

</html>