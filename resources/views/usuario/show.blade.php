<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Usuarios</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand h1" href={{ route('usuario.index') }}>CRUD Categoria</a>
            <div class="justify-end ">
                <div class="col ">
                    <a class="btn btn-sm btn-primary" href={{ route('usuario.index') }}>Listar Usuarios</a>
                    <a class="btn btn-sm btn-success" href={{ route('usuario.create') }}>Añadir Usuarios</a>
                    <a class="btn btn-sm btn-danger" href={{ route('logout') }}>Salir</a>
                </div>
            </div>
    </nav>
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">id: {{ $usuario->id }}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">nombre: {{ $usuario->name }}</p>
                </div>
                <div class="card-body">
                    <p class="card-text">email: {{ $usuario->email }}</p>
                </div>
                <div class="card-body">
                    <p class="card-text">Email Verificado: <?php
                    if($usuario->email_verified_at){
                        print("✅");
                    } else {
                        print("❌");
                    }?></p>
                </div>
                <div class="card-body">
                    <p class="card-text">Cuenta Creada: {{ $usuario->created_at }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('usuario.edit', $usuario->id) }}" class="btn btn-primary btn-sm mb-2">Edit</a>
                    <form action="{{ route('usuario.destroy', $usuario->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
