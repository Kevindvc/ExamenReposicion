<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Productos</title>
</head>
<body class="antialiased">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <h2>Productos</h2>

        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">

            <div class="grid grid-cols-1 md:grid-cols-2">

                <div class="p-6">

                <p>
                    <a href="{{route('Produto.crear')}}" class="btn btn-primary">Agregar nuevo</a>

                </p>

                <table class="table">
                    <thead>
                        <th scope="col" name="codigo">Codigo</th>
                        <th scope="col" name="descripcion">Descripcion</th>
                        <th scope="col" name="precio">precio</th>
                        <th scope="col" name="stock">stock</th>
                        <th scope="col" name="pagaIsv">Isv</th>

                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                        <tr>
                            <td>{{$producto->id}}</td>
                            <td>{{$producto->descripcion}}</td>
                            <td>{{$producto->precio}}</td>
                            <td>{{$producto->stock}}</td>
                            <td>{{$producto->pagaIsv}}</td>

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
