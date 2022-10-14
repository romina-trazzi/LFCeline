<!DOCTYPE html>
<html lang="it">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Meta tag descrizione Google search -->
        <meta name="description" content="Descrizione del sito.">
        <meta name="keyword" content="libri, editoria, storia militare, guerra, guerra mondiale">
        <meta name="author" content="Romina Trazzi">

        <title>Louis-Ferdinand Céline </title>

        <!-- Favicon -->
        <link rel="icon" href="public/img/favicon.ico" sizes="16x16 32x32 64x64">

        <!-- Stardard CSS styles for this website -->

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Dancing+Script:wght@400;500;600;700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 


        <!-- Custom styles for this website -->

        <!-- Css stylesheets -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/mediaquery.css')}}" type="text/css">

       
    </head>

    <body>

        <div id="app">

            <div class="container_70">

                <header>

                    @include('layout.jumbotron') 

                    @include('layout.navup')
            
                </header>

                <main>

                    <h1> Main <h1>
                    @yield('content')

                </main>

                
                <footer> 
                    <h1> Footer </h1>
                    @include('layout.navdown')
                    @include('layout.footer')   

                </footer>

            </div>

        </div>


    <body>  


    <!-- Javascript files -->
    <script src="https://kit.fontawesome.com/dc7f057ed2.js" crossorigin="anonymous" type="text/Javascript"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src= "{{asset('js/bootstrap.js')}}" type="text/Javascript"> </script>
    <script src= "{{asset('js/main_vue.js')}}" type="text/Javascript"> </script>

</html>