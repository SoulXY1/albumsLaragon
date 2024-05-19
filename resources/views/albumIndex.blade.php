<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albums</title>
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
        <h1 class="center-align">Lista de Albumes</h1>
        <a href="/album/create" class="btn btn-light mt-3">Añadir Album</a>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Año</th>
                    <th>Género</th>
                    <th>Precio</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($albums as $album)
                <tr>
                    <td>{{$album->id}}</td>
                    <td>{{$album->title}}</td>
                    <td>{{$album->author}}</td>
                    <td>{{$album->year}}</td>
                    <td>
                        @foreach ($album->genres as $genre)
                            {{$genre->genreName}}<br>
                        @endforeach
                    </td>
                    <td>${{$album->price}}</td>
                    <td><a href="/album/{{$album->id}}" class="btn btn-outline-light">Ver mas</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>