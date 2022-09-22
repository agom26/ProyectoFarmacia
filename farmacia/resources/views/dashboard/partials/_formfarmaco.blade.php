<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Farmaco</title>
</head>
<body>
    
    <form action="{{route('farmacos.store')}}" method="post"> 
        @include('dashboard.partials.sesion-flash-status')

        <section class="row 6">
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> <!-- si -->
                <div class="form-floating mb-3">
                    <input type="text" name="codigo" class="form-control form-floating mb-3" placeholder="Codigo" value="{{$farmaco->codigo}}">
                    <label for="text">Codigo</label>
                    @error('codigo')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="nombre" class="form-control form-floating mb-3" placeholder="nombre" value="{{$farmaco->nombre}}">
                    <label for="text">Nombre </label>
                    @error('nombre')
                    <small class="text-light">{{ $message }}</small>
                    @enderror
                </div>
                

                <div class="form-floating mb-3">
                    <input type="decimal" name="ingredientes"  class="form-control form-floating mb-3" placeholder="ingredientes"  value="{{$farmaco->ingredientes}}">
                    <label for="text">ingredientes</label>
                    @error('ingredientes')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="indicaciones"  class="form-control form-floating mb-3" placeholder="indicaciones" value="{{$farmaco->indicaciones}}">
                    <label for="text">indicaciones </label>
                    @error('indicaciones')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="precio" class="form-control form-floating mb-3" placeholder="precio" value="{{$farmaco->precio}}">
                    <label for="text">precio </label>
                    @error('precio')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <center><button type="" class="btn btn-outline-warning btn-lg"><h4>Guardar</h4></button><br>
                    <a href="{{route('farmacos.index')}}" class="btn btn-info mt-3">Regresar</a>

                </center>

            </article>
            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            </article>
        
        </section>

                
            </div>
            
    </form>
</body>
</html>