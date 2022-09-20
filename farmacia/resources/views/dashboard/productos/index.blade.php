<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>Productos</title>
</head>
<body>

    <a href="{{ route('productos.create') }}" class="btn Btn-primary">Crear</a>


    <!-- Si hay cualquier tipo de error se generara algo -->
  
    <!-- Siempre colocar el endif -->

    <main>
        <div class="container">
            <table class="table table-striped">
                <Thead>
                    <body>
                        <tr>
                            <td>
                                Id
                            </td>
                            <td>
                                Codigo
                            </td>
                        
                            <td>
                                Nombre
                            </td>
                        
                            <td>
                                Existencia
                            </td>
                        
                            <td>
                                Precio
                            </td>
                        
                            <td>
                                Descipción
                            </td>

                            <td>
                                Creado
                            </td>
                            <td>
                                Actualizado
                            </td>
                            <td>
                                Acciones
                            </td>
                        </tr>
                        
                    </body>

                    {{-- recorrer arreglo --}}
                    {{-- la variable posts que se manda aqui se va a llamar post --}}
                    @foreach ($productos as $producto)
                        <tr>
                            <td>
                                {{$producto->id}}
                            </td>
                        
                            <td>
                                {{$producto->codigo}}
                            </td>
                        
                            <td>
                                {{$producto->nombre}}
                            </td>
                            <td>
                                {{$producto->existencia}}
                            </td>
                        
                            <td>
                                {{$producto->precio}}
                            </td>
                        
                            <td>
                                {{$producto->descripcion}}
                            </td>
                        
                            <td>
                                {{$producto->created_at->format('d-m-Y')}}
                            </td>
                        
                            <td>
                                {{$producto->updated_at-> format('d-m-Y')}}
                            </td>

                            <td>
                                <a href="{{route('productos.show',$producto->id)}}" class="btn btn-info">Ver</a>
                                <a href="{{route('productos.edit',$producto->id)}}" class="btn btn-info">Actualizar</a>

                                <form method="POST" action="{{route('productos.destroy',$producto->id)}}">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger ms-5" type="submit">Borrar</button>


                                </form >
                                
                            </td>
                        </tr>
                    @endforeach
                        

                </Thead>
                {{$productos->links()}}
            </table>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>