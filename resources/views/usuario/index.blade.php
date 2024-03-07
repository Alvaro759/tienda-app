<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Usuarios</title>
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
                    <a class="btn btn-sm btn-primary" href={{ route('usuario.create') }}>Añadir Usuarios</a>
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
                        <th scope="col">id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr class="">
                            <td scope="row"><a href={{route('usuario.show', $usuario->id)}}>{{ $usuario->id }}</a></td>
                            <td scope="row"><a href={{route('usuario.show', $usuario->id)}}>{{ $usuario->name }}</a></td>
                            <td><a href={{route('usuario.show', $usuario->id)}}>{{ $usuario->email }}</a></td>
                            <td><a href="{{route('usuario.edit', $usuario->id)}}" class="btn btn-primary btn-sm">Edit</a></td>
                            <td>
                                <form action="{{route('usuario.destroy', $usuario->id)}}" method="post">
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
