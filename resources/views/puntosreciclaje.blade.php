<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        @foreach($puntosrecoleccion as pr)
            {{$pr->nombre}}
            @foreach($pr->getRecolectores() as $r)
                    {{$r->nombre}}
            @endforeach
        @endforeach
    </div>
</body>
</html>