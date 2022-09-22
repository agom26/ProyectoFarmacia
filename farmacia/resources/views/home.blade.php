<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="">
    <div id="app">
        @include('dashboard.partials.nav-header-admin')
        <center><img src="https://m.media-amazon.com/images/S/stores-image-uploads-na-prod/c/AmazonStores/ATVPDKIKX0DER/ee4b774f3bb178d5895ad7bc1348c9bf.w3000.h600.jpg" alt="" width="100%" height="100%">
        
        <main class="ps-4">
            <div class="container">
                <center>
                    <h1 class="mt-5">
                        <img class="mb-3" src="https://media1.giphy.com/media/jEl8zlvatJBVS/giphy.gif" alt="" width="10%" height="10%"> 
                            Bienvenido a la Farmacia Jedi 
                        <img class="mb-3" src="https://media1.giphy.com/media/jEl8zlvatJBVS/giphy.gif" alt="" width="10%" height="10%">
                    </h1>
                    
                    
                    <img src="https://cdn.custom-cursor.com/packs/2829/pusheen-yoda-and-lightsaber-pack.png" alt="" width="15%" height="15%" >

                    <p class="mt-2">Nosotros En esta sección podrás conocer más sobre Farmacias Batres</p>


                    <section class="row 4 mt-5">
                        <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <center><img src="https://cdn-icons-png.flaticon.com/512/2201/2201581.png" alt="" width="18%" height="15%">

                            <h4 class="mt-3">Informacion</h4>
                            <p class="mt-3">
                                Somos una empresa de venta de medicamentos eticos y populares
                            </p>
                            <button type="button" class="btn btn-outline-success">Ver</button>


                        </article>
                        <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <center><img src="https://cdn-icons-png.flaticon.com/512/4320/4320323.png" alt="" width="17%" height="15%">
                            <h4 class="mt-4">Contactanos</h4>
                            <p class="">
                                <p>Estamos para atenderte las 24H</p>
                                <button type="button" class="btn btn-outline-success">45785478</button>
                            </p>
                        </article>
                        
                    </section>

                    <section class="row 4 mt-5">
                        <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                            <center><img src="https://i.pinimg.com/originals/4c/cf/96/4ccf96b49f3c29cb83c446f034d5ee28.png" alt="" width="65%" height="25%">

                        </article>
                        <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                            <center><img src="https://i.pinimg.com/originals/b9/95/d8/b995d86eea468662800ae42cb9a0ea5a.png" alt="" width="55%" height="25%">
                        </article>
                        <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                            <center><img src="https://i.pinimg.com/originals/27/b7/54/27b754d0a0b4358df43f160b7911081c.png" alt="" width="50%" height="25%">
                        </article>
                        <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                            <center><img src="https://i.pinimg.com/originals/bf/19/4d/bf194d624be448d2684d203b446a5cbf.png" alt="" width="95%" height="25%">
                        </article>                        
                    </section>

                    <h2 class="mt-5">“Porque las mayores preocupaciones también pueden superarse con una de las mejores recetas Guatemaltecas…</h2>
    

                    <section class="row 4 mt-5 mb-5">
                        
                        <article class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                            </article>
                            
                        <article class="col-xs-12 col-sm-12 col-md-6 col-lg-1">
                            <a title="Click para Chatear" target="_blank" rel="noopener" href="https://api.whatsapp.com/send?phone=50242779761&text=Proyecto%20Farmacia,%20Gabriela%20y%20Andrew%20:)">
                                <center><img src="https://www.labolsera.com/modules/cdesigner/views/img/upload/418628dceb02a596976e72a10e896afff49562bc_whatsapp.png" alt="" width="100%" height="25%">
                            </a>
                        </article>

                        <article class="col-xs-12 col-sm-12 col-md-6 col-lg-1">
                            <a title="Click para Facebook" target="_blank" rel="noopener" href="https://www.facebook.com/">
                                <center><img src="https://i.pinimg.com/originals/cb/4d/e1/cb4de1bc975812503a7a6cb2ff0ef43b.png" alt="" width="100%" height="25%">
                            </a> 
                        </article>
                            
                        <article class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                           
                        </article>  

                    </section>
                </center>

            </div>
            
        </main>
    </div>
</body>
</html>
