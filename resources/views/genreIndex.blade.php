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
        <h1 class="center-align">Lista de Género</h1>
        <a href="/genre/create" class="btn btn-light mt-3">Añadir Género</a>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del Género</th>
                    <th>Decada</th>
                    <th>Ver mas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($genres as $genre)
                <tr>
                    <td>{{$genre->id}}</td>
                    <td>{{$genre->genreName}}</td>
                    <td>{{$genre->decade}}'s</td>

                    <td><a href="/genre/{{$genre->id}}" class="btn btn-outline-light">Ver mas</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>