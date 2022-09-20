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
        <h5>ADMIN</h5>
        <center><h1 class="mb-5">Ingreso de Productos</h1></center>
    </header>

    <main>
        <div class="container">


            <form action="{{route('productos.store')}}" method="post""> 
        
                @include('dashboard.partials._form')
    
            </form>




        </div>
        
    </main>



    {{--     <main>
 
    <label for="" >Codigo</label>
                <input type="text" name="codigo" class="" value="{{old('codigo')}}">
                @error('codigo')
                    <small class="text-light">{{ $message }}</small>
                @enderror
                <br><br>

                <label for="" >Nombre</label>
                <input type="text" name="nombre" value="{{old('nombre')}}">
                @error('nombre')
                    <small class="text-light">{{ $message }}</small>
                @enderror
                 <br><br>              
                
                <label for="" >Existencia</label>
                <input type="text" name="existencia" class="" value="{{old('existencia')}}">
                @error('existencia')
                    <small class="text-light">{{ $message }}</small>
                @enderror
                <br><br>

                <label for="" >Precio</label>
                <input type="decimal" name="precio" class="" value="{{old('precio')}}">
                @error('precio')
                    <small class="text-light">{{ $message }}</small>
                @enderror
                <br><br>

                <label for="" >Fecha de Fabricacion</label>
                <input type="date" name="Fecha de Fabricacion" class="" value="{{old('Fecha de Fabricacion')}}">
                @error('Fecha de Fabricacion')
                    <small class="text-light">{{ $message }}</small>
                @enderror
                <br><br>

                <label for="" >Fecha de Vencimiento</label>
                <input type="date" name="Fecha de Vencimiento" class="" value="{{old('Fecha de Vencimiento')}}">
                @error('Fecha de Vencimiento')
                    <small class="text-light">{{ $message }}</small>
                @enderror
                <br><br>

                <label for="" >Descripcion</label>
                <textarea name="descripcion" id="" >{{old('descripcion')}}</textarea>
                @error('descripcion')
                    <small class="text-light">{{ $message }}</small>
                @enderror
                <br><br>





        <section class="row 6">
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> <!-- si -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Nombre">
                    <label for="text">Nombre Producto</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Codigo">
                    <label for="floatingPassword">Codigo</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Existencia">
                    <label for="text">Existencia</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Precio">
                    <label for="text">Precio</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="floatingInput" placeholder="date">
                    <label for="date">Fecha de Produccion</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="floatingInput" placeholder="date">
                    <label for="date">Fecha de Vencimiento</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea type="text" class="form-control" id="floatingInput" placeholder="Descripcion" name="" id="" ></textarea>
                
                    <label for="text">Descripcion</label>
                </div>
                
                
                <center><button type="button" class="btn btn-outline-warning btn-lg"><h4>Guardar</h4></button></center>

            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
           
        </section>

    
    </main> --}}

    <footer>

    </footer>
    
</body>
</html>