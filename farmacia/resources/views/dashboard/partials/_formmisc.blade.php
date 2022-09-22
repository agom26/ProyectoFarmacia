<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Misceaneo</title>
</head>
<body>
    
    <form action="{{route('miscelaneos.store')}}" method="post"> 
        @include('dashboard.partials.sesion-flash-status')

        <section class="row 6">
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> <!-- si -->
                <div class="form-floating mb-3">
                    <input type="text" name="codigo" class="form-control form-floating mb-3" placeholder="Codigo" value="{{$miscelaneo->codigo}}">
                    <label for="text">Codigo</label>
                    @error('codigo')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="nombre" class="form-control form-floating mb-3" placeholder="nombre" value="{{$miscelaneo->nombre}}">
                    <label for="text">Nombre </label>
                    @error('nombre')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>
                

                <div class="form-floating mb-3">
                    <input type="decimal" name="precio"  class="form-control form-floating mb-3" placeholder="precio"  value="{{$miscelaneo->precio}}">
                    <label for="text">Precio </label>
                    @error('precio')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="existencia"  class="form-control form-floating mb-3" placeholder="Existencia" value="{{$miscelaneo->existencia}}">
                    <label for="text">Existencia </label>
                    @error('existencia')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="marca" class="form-control form-floating mb-3" placeholder="marca" value="{{$miscelaneo->marca}}">
                    <label for="text">Marca </label>
                    @error('marca')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <center><button type="" class="btn btn-outline-warning btn-lg"><h4>Guardar</h4></button><br>
                    <a href="{{route('miscelaneos.index')}}" class="btn btn-info mt-3">Regresar</a>

                </center>

            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
        
        </section>

                
            </div>
            
    </form>
</body>
</html>