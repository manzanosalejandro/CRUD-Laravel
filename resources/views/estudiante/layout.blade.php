<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LISTADO DE ESTUDIANTES</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}";>
    <script src="{{asset("js/app.js")}}"></script>
</head>
<body>
<div class="container">
    <h1 class="m-3 text-info">CRUD De estudiantes </h1>
    @if (isset($msj))
        <h2 class="alert-dark">{{$msj}}</h2>
    @endif

    @yield("opciones")
    @yield("contenido")

</div>

</body>
</html>

