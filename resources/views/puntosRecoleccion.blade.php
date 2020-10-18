<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Puntos de Recoleccion</h1>

    <form action="/puntosRecoleccion" method="POST">
        @csrf 
        <input type="text" name="puntoRecoleccion">
        <input type="submit">
    </form>

    @if(isset($PR))
        <b>{{$PR}}</b>.</p>
        <p>Edita</p>
        <p>Agrega Recolector</p>
        <p>Elimina</p>
    @endif
    
</body>
</html>