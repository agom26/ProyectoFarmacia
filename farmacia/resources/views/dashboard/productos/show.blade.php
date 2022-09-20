<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>SHOW</title>
</head>
<body>
    <header>@include('dashboard.partials.nav-header-admin')</header>
    <h1>Ingreso de Productos</h1><br><br>

    <!-- Si hay cualquier tipo de error se generara algo -->
  
    <!-- Siempre colocar el endif -->

    <main>
        <div class="container">
            <div class="card">
                <div class="card-header">
                  <h2>Ver Producto</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('productos.store')}}" method="post">

            
                        @csrf
            
                        <section class="margen">
                            <label for="" class="form-label">Codigo</label>
                            <input type="text" name="codigo" class="form-control" value="{{$productos->codigo}} ">
                            @error('codigo')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>
                            
                            <label for=""class="form-label" >Nombre</label>
                            <input type="text" name="nombre" class="form-control"value="{{$productos->nombre}}">
                            @error('nombre')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for=""class="form-label" >Descripcion</label>
                            <input type="text" name="descripcion" class="form-control"value="{{$productos->descripcion}}">
                            @error('descripcion')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>
                            <label for=""class="form-label" >Precio</label>
                            <input type="decimal" name="precio" class="form-control"value="{{$productos->precio}}">
                            @error('precio')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>

                            <label for="" class="form-label">Existencia</label>
                            <textarea name="content" class="form-control" >{{$productos->existencia}}</textarea>
                            @error('content')
                                <small class="text-light">{{ $message }}</small>
                            @enderror
                            <br>
            
                            
                            
                            
                        </section>
                    </form>
                  <a href="{{route('productos.index')}}" class="btn btn-info">Regresar</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>