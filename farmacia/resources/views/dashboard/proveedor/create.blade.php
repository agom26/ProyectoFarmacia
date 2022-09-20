<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Proveedores</title>
</head>
<body>
   

    <header>
        <h5>ADMIN</h5>
        <center><h1 class="mb-5">Ingreso de Proveedores</h1></center>
    </header>

    <main>
        <div class="container">
        <form action="{{route('proveedor.store')}}" method="post">

            {{-- 5/09 mando a llamar la sesion flash --}}
            @include('dashboard.partials.sesion-flash-status')


    
            <section class="row 6">
                <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                </article>
                <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> <!-- si -->
                    
                    <div class="form-floating mb-3">
                        <input type="text" name="nombre" class="form-control form-floating mb-3" placeholder="nombre" value="{{old('nombre')}}">
                        <label for="text">Nombre </label>
                        @error('nombre')
                        <small class="text-light">{{ $message }}</small>
                        @enderror
                    </div>
                    
                    <center><button type="" class="btn btn-outline-warning btn-lg"><h4>Guardar</h4></button></center>

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