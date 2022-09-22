<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Productos</title>
</head>
<body>
   

    <header>
        @include('dashboard.partials.nav-header-admin')
        <h5>ADMIN</h5>
        <center><h1 class="mb-5">Ingreso de Miscelaneos</h1></center>
    </header>

    <main>
        <div class="container">


            <form action="{{route('miscelaneos.store')}}" method="post"> 
                @include('dashboard.partials.sesion-flash-status')
        
                <section class="row 6">
                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    </article>
                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> <!-- si -->
                        <div class="form-floating mb-3">
                            <input type="text" name="codigo" class="form-control form-floating mb-3" placeholder="Codigo" >
                            <label for="text">Codigo</label>
                            @error('codigo')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>
        
                        <div class="form-floating mb-3">
                            <input type="text" name="nombre" class="form-control form-floating mb-3" placeholder="nombre" >
                            <label for="text">Nombre </label>
                            @error('nombre')
                            <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>
                        
        
                        <div class="form-floating mb-3">
                            <input type="decimal" name="precio"  class="form-control form-floating mb-3" placeholder="precio"  >
                            <label for="text">Precio </label>
                            @error('precio')
                            <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>
        
                        <div class="form-floating mb-3">
                            <input type="text" name="existencia"  class="form-control form-floating mb-3" placeholder="Existencia" >
                            <label for="text">Existencia </label>
                            @error('existencia')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="marca" class="form-control form-floating mb-3" placeholder="marca" >
                            <label for="text">Marca </label>
                            @error('marca')
                                <small class="text-danger ">{{ $message }}</small>
                            @enderror
                        </div>
        
                        <center>
                            <button type="" class="btn btn-outline-warning btn-lg"><h4>Guardar</h4></button><br>
                            <a href="{{route('miscelaneos.index')}}" class="btn btn-outline-primary mt-3">Regresar</a>
                        </center>
        
                    </article>
                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    </article>
                
                </section>
        
                                            
            </form>

        </div>
        
    </main>

    <footer>

    </footer>
    
</body>
</html>