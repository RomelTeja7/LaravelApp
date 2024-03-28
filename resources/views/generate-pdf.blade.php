<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }

        .section-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            padding-bottom: 10px;
        }

        ul {
            list-style: none;
        }
    </style>
</head>

<body>
    @foreach ($proyectos as $item)
        <header style="text-align: center; margin-bottom: 20px;">
            <h1>{{ $item->NombreProyecto }}</h1>
        </header>
        <div class="section">
            <div class="section-title" style="text-align: center;"> {{ $title }}</div>

            <div class="section-content">
                <p><strong>Fecha:</strong> {{ $date }}</p>
                <p><strong>Datos:</strong></p>
                <ul>
                    <li class="project-item">
                        <p><strong>ID:</strong> {{ $item->Id }}</p>
                        <p><strong>Nombre Proyecto:</strong> {{ $item->NombreProyecto }}</p>
                        <p><strong>Fuente Fondos:</strong> {{ $item->FuenteFondos }}</p>
                        <p><strong>Monto Planificado:</strong> {{ $item->MontoPlanificado }}</p>
                        <p><strong>Monto Patrocinado:</strong> {{ $item->MontoPatrocinado }}</p>
                        <p><strong>Monto Fondos Propios:</strong> {{ $item->MontoFondosPropios }}</p>
                    </li>
    @endforeach
    </ul>
    </div>
    </div>
    <footer style="text-align: center; margin-top: 20px;">
        <p>Romel Tejada</p>
        <p>{{ $title }}</p>
    </footer>
</body>

</html>
