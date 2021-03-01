<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Libreria</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="editorial" data-bs-toggle="dropdown" aria-expanded="false">Editorial</a>
                        <ul class="dropdown-menu" aria-labelledby="editorial">
                            <li><a class="dropdown-item" href="{{route('editorial.create')}}">Alta</a></li>
                            <li><a class="dropdown-item" href="{{route('editorial.index')}}">Consulta</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="Libro" data-bs-toggle="dropdown" aria-expanded="false">Libro</a>
                        <ul class="dropdown-menu" aria-labelledby="Libro">
                            <li><a class="dropdown-item" href="{{route('libro.create')}}">Alta</a></li>
                            <li><a class="dropdown-item" href="{{route('libro.index')}}">Consulta</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="clasificacion" data-bs-toggle="dropdown" aria-expanded="false">Clasificacion</a>
                        <ul class="dropdown-menu" aria-labelledby="clasificacion">
                            <li><a class="dropdown-item" href="{{route('clasificacion.create')}}">Alta</a></li>
                            <li><a class="dropdown-item" href="{{route('clasificacion.index')}}">Consulta</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <main class="container">
        <div class="starter-template text-center py-5 px-3">
            <br>
            @yield('content')
        </div>

    </main>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>