<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Categoria</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand h1" href={{ route('categoria.index') }}>CRUD Categoria</a>
            <div class="justify-end ">
                <div class="col ">
                    <a class="btn btn-sm btn-success" href={{ route('categoria.create') }}>Añadir Categoria</a>
                    <a class="btn btn-sm btn-danger" href={{ route('logout') }}>Salir</a>
                </div>
            </div>
    </nav>
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">id: {{ $categoria->id }}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text"><b>Nombre:</b> {{ $categoria->nombre }}</p>
                </div>
                <div class="card-body">
                    <p class="card-text"><b>Descripcion:</b> {{ $categoria->descripcion }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{route('categoria.edit', $categoria->id)}}" class="btn btn-primary btn-sm mb-2">Edit</a>
                    <form action="{{route('categoria.destroy', $categoria->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>

            <div class="container-fluid mt-3">
                <div class="container-sm d-flex align-items-center">
                    <table class="table border table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($producto as $productos)
                            <tr class="">
                                <td scope="row">{{ $productos->nombre }}</td>
                                <td>{{ $productos->precio }}€</td>
                                <td>{{ $productos->stock }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</body>

</html>