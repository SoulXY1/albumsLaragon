<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar album</title>
    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="/album">urVibe Albums</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/album/create">Añadir Album</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/album">Ver albums</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/genre/create">Añadir género</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/genre">Ver géneros</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <h1 class="header">{{$genre->genreName}}</h1>
        <h4 class="blue-text text-darken-2">Decada: {{$genre->decade}}'s</h4>


        <div>
            <div class="col s6">
                <a href="/genre/{{$genre->id}}/edit" class="btn btn-light btn-block mt-3" style="width:100px;">Modificar</a>
            </div>
            <div>
                <form method="POST" action="/genre/{{$genre->id}}" id="formulario">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-light btn-block mt-3"  style="width:100px;">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>