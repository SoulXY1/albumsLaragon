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

    <h1 class="container mt-5">Crear Album</h1>
    <form method="POST" action="/album" id="formulario" class="container">
        @csrf

        <div class="form-group mt-3">
            <label for="title">Titulo del album</label>
            <input id="title" type="text" name="title" class="form-control">

        </div>
        <div class="form-group mt-3">
            <label for="marca">Autor</label>
            <input id="author" type="text" name="author" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="year">Año de lanzamiento</label>
            <input id="year" type="year" name="year" class="form-control">

        </div>
        <div class="form-group mt-3">
            <label for="price">Precio</label>
            <input id="price" type="number" name="price" class="form-control">
        </div>


        <div class="form-group mt-3">
            <label for="genres">Generos</label>
            <select id="genres" name="genres[]" multiple class="form-control">
                <option value="" disabled selected>Selecciona el genero al que pertenece</option>
                @foreach($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->genreName }}</option>
                @endforeach
            </select>

        </div>

        <div class="mt-3">
            <button class="btn btn-light" type="submit" name="action">Enviar</button>
        </div>
    </form>


</body>

</html>