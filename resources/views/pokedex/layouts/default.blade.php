<!DOCTYPE html>
<html lang="es-MX" id="app">
    <head>
        <meta charset="utf-8" />
        <title>Pokédex</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/bootstrap/dist/css/bootstrap.css') }}"/>
        <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pokedex-theme.css') }}"/>

    </head>
    <body class="pokedex">

        <header class="sche-header">
            <div class="container-fluid">
                <nav class="nav">
                    
                    <div class="container-fluid">
                    
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <h1 id="logo" class="logo-stroke">
                                POKÉDEX
                            </h1>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse">

                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#sign-in">Sign In</a></li>
                                <li class="active" @click="showRight = true"><a href="#sign-up" class="btn">Sign Up</a></li>
                            </ul>

                            <form class="navbar-form navbar-right header-search" role="search">
                                <div class="form-group">
                                    <input type="search" class="form-control" placeholder="Search pokémon">
                                </div>
                            </form>

                        </div><!-- /.navbar-collapse -->
                    </div>

                </nav>
            </div>
        </header>

        <div class="container-fluid">
            <!-- START CONTENT -->

            <!-- END CONTENT -->
        </div>

        <footer>
            
        </footer>

        @section('scripts')
        <script src="{{ asset('assets/js/vue/dist/vue.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/vue-resource/dist/vue-resource.js') }}" type="text/javascript"></script>
        @show

    </body>
</html>