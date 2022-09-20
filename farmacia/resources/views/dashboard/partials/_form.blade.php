<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('productos.store')}}" method="post""> 
        @include('dashboard.partials.sesion-flash-status')

        <section class="row 6">
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> <!-- si -->
                <div class="form-floating mb-3">
                    <input type="text" name="codigo" class="form-control form-floating mb-3" placeholder="Codigo" value="{{$producto->codigo}}">
                    <label for="text">Codigo</label>
                    @error('codigo')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="nombre" class="form-control form-floating mb-3" placeholder="nombre" value="{{$producto->nombre}}">
                    <label for="text">Nombre </label>
                    @error('nombre')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="descripcion" class="form-control form-floating mb-3" placeholder="descripcion" value="{{$producto->descripcion}}">
                    <label for="text">Descripción </label>
                    @error('descripcion')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="decimal" name="precio"  class="form-control form-floating mb-3" placeholder="precio"  value="{{$producto->precio}}">
                    <label for="text">Precio </label>
                    @error('precio')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="existencia"  class="form-control form-floating mb-3" placeholder="Existencia" value="{{$producto->existencia}}">
                    <label for="text">Existencia </label>
                    @error('existencia')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>

                <center><button type="" class="btn btn-outline-warning btn-lg"><h4>Guardar</h4></button></center>

            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
        
        </section>

                
            </div>
            
        </form>
</body>
</html>