<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
    <div class="section">
        <div class="section-title">{{ $title }}</div>
        <div class="section-title">{{ $institution }}</div>
        <div class="section-content">
            <p>Fecha: {{ $date }}</p>
            <p>Proyectos:</p>
            <ul>
                @foreach($proyectos as $item)
                <li>ID: {{$item->Id}}</li>
                <li>Nombre Proyecto: {{$item->NombreProyecto}}</li>
                <li>Fuente Fondos: {{$item->FuenteFondos}}</li>
                <li>Monto Planificado: {{$item->MontoPlanificado}}</li>
                <li>Monto Patrocinado: {{$item->MontoPatrocinado}}</li>
                <li>Monto Fondos Propios: {{$item->MontoFondosPropios}}</li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>