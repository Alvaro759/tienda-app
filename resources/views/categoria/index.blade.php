<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Categorias</title>
    <style>
        a{
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand h1" href={{ route('categoria.index') }}>CRUD Categorias</a>
            <div class="justify-end ">
                <div class="col ">
                    <a class="btn btn-sm btn-primary" href={{ route('usuario.index') }}>Listar Usuarios</a>
                    <a class="btn btn-sm btn-success" href={{ route('categoria.create') }}>Añadir Categorias</a>
                    <a class="btn btn-sm btn-danger" href={{ route('logout') }}>Salir</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid mt-3">
        <div class="container-sm d-flex align-items-center">
            <table class="table border table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                        <tr class="">
                            <td scope="row"><a href={{route('categoria.show', $categoria->id)}}>{{ $categoria->nombre }}</a></td>
                            <td><a href={{route('categoria.show', $categoria->id)}}>{{ $categoria->descripcion }}</a></td>
                            <td><a href="{{route('categoria.edit', $categoria->id)}}" class="btn btn-primary btn-sm">Edit</a></td>
                            <td>
                                <form action="{{route('categoria.destroy', $categoria->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
