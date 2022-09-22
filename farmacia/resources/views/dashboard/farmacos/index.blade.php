<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>Farmacos</title>
</head>
<body>

    
    <header>@include('dashboard.partials.nav-header-superadmin')</header>

    <!-- Si hay cualquier tipo de error se generara algo -->
  
    <!-- Siempre colocar el endif -->

    <main>
        <br><br>
        <div class="container">
            <div class="card">
                
                <div class="card-header">
                    <a href="{{ route('farmacos.create') }}" class="btn btn-primary">Crear</a>
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
                                Ingredientes
                            </td>
                        
                            <td>
                                Indicaciones
                            </td>
                        
                            <td>
                                Precio
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
                    @foreach ($farmacos as $farmaco)
                        <tr>
                            <td>
                                {{$farmaco->id}}
                            </td>
                        
                            <td>
                                {{$farmaco->codigo}}
                            </td>
                        
                            <td>
                                {{$farmaco->nombre}}
                            </td>
                            <td>
                                {{$farmaco->ingredientes}}
                            </td>
                        
                            <td>
                                {{$farmaco->indicaciones}}
                            </td>
                        
                            <td>
                                {{$farmaco->precio}}
                            </td>
                        
                            <td>
                                {{$farmaco->created_at->format('d-m-Y')}}
                            </td>
                        
                            <td>
                                {{$farmaco->updated_at-> format('d-m-Y')}}
                            </td>

                            <td>
                                <a href="{{route('farmacos.show',$farmaco->id)}}" class="btn btn-outline-info">Ver</a>
                                <a href="{{route('farmacos.edit',$farmaco->id)}}" class="btn btn-outline-info">Actualizar</a>
                                                        
                                <form method="POST" action="{{route('farmacos.destroy',$farmaco->id)}}">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-outline-danger ms-5" type="submit">Borrar</button>
                                </form >


                                
                            </td>
                        </tr>
                    @endforeach
                        

                </Thead>
                {{$farmacos->links()}}
            </table>
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>