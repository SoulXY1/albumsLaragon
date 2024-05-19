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
        <h1 class="header">{{$album->title}}</h1>
        <h4>Precio: ${{$album->price}}</h4>
    	<h4>Autor: {{$album->author}}</h4>

        @foreach ($album->genres as $genre)
            <h4>{{$genre->genreName}}</h4>
        @endforeach

        <div>
            <div>
                <a href="/album/{{$album->id}}/edit" class="btn btn-light btn-block">Modificar</a>
            </div>
            <div class="">
                <form method="POST" action="/album/{{$album->id}}" id="formulario">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-light btn-block">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>