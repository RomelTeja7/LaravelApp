<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<style>

</style>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">ProyectoFinal</span>
        </div>
    </nav>
    @include('create')
    @include('read')
    @include('update')
    @include('delete')
    <div class="container-md mt-5">
        @if(session("exito"))
        <div class="alert alert-success">{{session("exito")}}</div>
        @endif
        @if(session("error"))
        <div class="alert alert-danger">{{session("error")}}</div>
        @endif
        <a class="btn btn-success" role="button" data-bs-toggle="modal" href="#createModalToggle"><i class="fas fa-file"></i></a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">NombreProyecto</th>
                    <th scope="col">FuenteFondos</th>
                    <th scope="col">MontoPlanificado</th>
                    <th scope="col">MontoPatrocinado</th>
                    <th scope="col">MontoFondosPropios</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($data as $item)
                <tr>
                    <td>{{$item->Id}}</td>
                    <td>{{$item->NombreProyecto}}</td>
                    <td>{{$item->FuenteFondos}}</td>
                    <td>{{$item->MontoPlanificado}}</td>
                    <td>{{$item->MontoPatrocinado}}</td>
                    <td>{{$item->MontoFondosPropios}}</td>
                    <td>
                        <a href="{{ route('generate.pdf', $item->Id) }}" class="btn btn-danger" role="button" target="_blank"><i class="fas fa-file-pdf"></i></a>
                        <a class="btn btn-info" role="button" data-bs-toggle="modal" href="#readModalToggle{{$item->Id}}"><i class="fas fa-eye"></i></a>
                        <a class="btn btn-warning" role="button" data-bs-toggle="modal" href="#updateModalToggle{{$item->Id}}"><i class="fas fa-pen"></i></a>
                        <a class="btn btn-danger" data-bs-toggle="modal" href="#deleteModalToggle{{$item->Id}}" role="button"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>