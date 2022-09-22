<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset ('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/>app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


    
    <title>ACTUALIZAR FARMACO</title>
</head>
<body class="fondo">
    <header>@include('dashboard.partials.nav-header-superadmin')</header>
   {{--  @include('dashboard.partials.nav-header-main') --}}

   <br>
    <!-- dashboar/post/create.blade.php -->
    <center><h1 >Actualizar Farmaco</h1></center>
    <br><br>
    <img src="images/1.png" alt="">
    {{-- @include('dashboard.partials.sesion-flash-status') --}}
        <form action="{{route('farmacos.update',$farmaco->id)}}" method="post"> 
            
            @method('PUT')
            @include('dashboard.partials._formfarmaco')

        </form>



    <footer class="center">
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>



</body>
</html>