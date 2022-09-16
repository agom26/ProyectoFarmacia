<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset ('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/>app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


    
    <title>POST</title>
</head>
<body class="fondo">
    @include('dashboard.partials.nav-header-main')

    <!-- dashboar/post/create.blade.php -->
    <h1 class="center">Ingreso de Post</h1><br>
    <h2 class="center">Andrew Roan Castro Diaz 201908011</h2>
    <br><br>
    <img src="images/1.png" alt="">
        <form action="{{route('post.store')}}" method="post""> 
        @include('dashboard.partials.sesion-flash-status')

        
                    <label for="" >Titulo</label>
                    <input class="margenleft" type="text" name="title" value="{{old('title')}}">
                        @error('title')
                                <small class="text-danger">{{ $message }}</small>
                        @enderror
                    <br>
                </div>
                

                <div class="margen">
                    <label for="">Url Corta</label>
                    <input class="margenleft1" type="text" name="slug" value="{{old('slug')}}">
                        @error('slug')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    <br>
                </div>

                <div class="margen">
                    <label for="">Contenido</label>
                    <textarea class="margenleft2" name="content" id="" cols="20" rows="1"> {{old('content')}}</textarea>
                        @error('content')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    <br>
                </div>

                <div class="margen">
                    <label for="">Descripcion</label>
                    <textarea class="margenleft3" name="description" id="" cols="20" rows="1" ></textarea>
                        @error('content')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    <br>
                </div>

                <button  class="margenbutton" type="">Enviar  </button>
                <img src="https://cdn-icons-png.flaticon.com/512/149/149347.png?w=740&t=st=1661401471~exp=1661402071~hmac=00d3606d4fb12589c070122ec31d13139e025bd68d94774411aec3948683b869" alt="" width="1.5%" height="5%">
            </div>
            
        </form>

    <div> <!-- botones -->
    <button type="button" class="btn btn-success">Editar</button>
    <button type="button" class="btn btn-danger">Eliminar</button>
    </div>

    <!--     <div class="col-md-12">
                <div >
                    <div >
                        Listado de Titulo
                    </div>

                    <table class="table table-striped task-table">
                        <thead>
                            <th>Titulo</th>
                            <th>URL Corta</th>
                            <th>Contenido</th>
                            <th>Descripcion</th>

                        </thead>
                        
                    </table>
                  
                </div>
    </div> -->
    



    <footer class="center">
        <p>Hecho por Andrew Castro</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>



</body>
</html>