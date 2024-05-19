<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear album</title>
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

    <h1 class="container mt-5">Editar Género</h1>
    <form method="POST" action="/genre/{{$genre->id}}" id="formulario" class="container">
        @csrf
        @method('patch')

        <div class="form-group mt-3">
            <label for="genreName">Nombre del Género</label>
            <input id="genreName" type="text" name="genreName" class="form-control" value="{{$genre->genreName}}">

        </div>
        <div class="form-group mt-3">
            <label for="decade">Decada</label>
            <input id="decade" type="text" name="decade" class="form-control" value="{{$genre->decade}}">

        </div>

        <div class="mt-3">
            <button class="btn btn-light" type="submit" name="action">Enviar</button>
        </div>
    </form>


</body>

</html>