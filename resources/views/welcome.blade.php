<!DOCTYPE html>
<html lang="es-MX" id="app">
    <head>
        <meta charset="utf-8" />
        <title>@{{ app_name }}</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}"/>
        <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'/>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        
        <!-- Pokémon theme -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pokedex-theme.css') }}"/>
        
        <!-- FAVICONS -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        <link rel="icon" href="favicon.ico" type="image/x-icon"/>

    </head>
    <body class="pokedex">

        <header class="header">
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
                                <li class="active"><a class="btn" href="{{ route('welcome') }}">Inicio</a></li>
                                <!--li class="active" @click="showRight = true"><a href="#sign-up" class="btn">Registrar Pokémon</a></li-->
                            </ul>

                            <form class="header-search navbar-form navbar-right header-search" 
                                  role="search"
                                  v-cloak>
                                <div class="form-group">
                                    <input type="search" 
                                           v-model="searchPokemon" 
                                           class="form-control" 
                                           placeholder="Search pokémon">
                                </div>
                                <ul v-show="searchPokemon">
                                    <li v-for="i in pokemons | searchFor searchPokemon">
                                        <a v-bind:href="i.url" @click="updatePokemon(i)">
                                            <img v-bind:src="i.image" />
                                        </a>
                                        <p>
                                            @{{ firstMayus(i.name) }}
                                            <span>
                                                @{{ i.description }}
                                            </span>
                                        </p>
                                    </li>
                                </ul>
                            </form>
                        </div><!-- /.navbar-collapse -->
                    </div>

                </nav>
            </div>
        </header>

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-10 col-md-offset-1">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-1">
                                <h2>@{{ firstMayus(pokemon.name) }}</h2>
                                <img v-bind:src="pokemon.image" style="width: 100%;max-width: 475px;"/>
                            </div>
                            <div class="col-md-4 col-md-offset-1">
                                <div class="container-fluid">
                                    <div class="row">
                                        <h3>Información</h3>
                                        <p>
                                            @{{ pokemon.description }}
                                        </p>
                                    </div>
                                    <div class="row">
                                      <h3>Estadisticas</h3>
                                      <canvas id="graph" width="200" height="200"></canvas>  
                                    </div>
                                    
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script src="{{ asset('assets/js/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/jquery.arctext.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/vue/dist/vue.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/vue-resource/dist/vue-resource.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/vue-strap/dist/vue-strap.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/chart/dist/chart.min.js') }}" type="text/javascript"></script>

        <script type="text/javascript">
            
            var data = {
                labels: ["Ataque", "Velocidad", "Fuerza", "Especial", "Habilidad"],
                datasets: [
                    {
                        label: "Agua",
                        fillColor: "rgba(220,220,220,0.2)",
                        strokeColor: "rgba(220,220,220,1)",
                        pointColor: "rgba(220,220,220,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        data: [65, 59, 90, 81, 56]
                    },
                    {
                        label: "Tierra",
                        fillColor: "rgba(105,97,85,0.2)",
                        strokeColor: "rgba(105,97,85,1)",
                        pointColor: "rgba(105,97,85,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(151,187,205,1)",
                        data: [28, 48, 96, 27, 100]
                    },
                    {
                        label: "Aire",
                        fillColor: "rgba(151,187,205,0.2)",
                        strokeColor: "rgba(151,187,205,1)",
                        pointColor: "rgba(151,187,205,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(151,187,205,1)",
                        data: [88, 88, 66, 89, 90]
                    }
                ]
            };

            // $('#logo').arctext({radius: 10});
            var context = document.querySelector('#graph').getContext('2d');
            // new Chart(context).Line(data);
            var chartPokemon = new Chart(context).Radar(data, {responsive: true});


        </script>

        <script type="text/javascript">

            Vue.config.debug = false;
            Vue.http.options.emulateJSON = true;
            Vue.http.options.emulateHTTP = true;
            Vue.http.options.root = 'http://localhost:8000/api';
            Vue.http.headers.common['Accept'] = 'application/json';

            Vue.filter('searchFor', function (value, searchPokemon) {

                // The first parameter to this function is the data that is to be filtered.
                // The second is the string we will be searching for.

                var result = [];

                if(!searchPokemon){
                    return value;
                }

                searchPokemon = searchPokemon.trim().toLowerCase();

                result = value.filter(function(item){
                    if(item.name.toLowerCase().indexOf(searchPokemon) !== -1){
                        return item;
                    }
                })

                // Return an array with the filtered data.

                return result;
            })
            

            var demo = new Vue({
                el: '#app',
                data: {

                    app_name: "Pokédex",

                    searchPokemon: "",

                    successSearch: false,

                    pokemon: {
                        name: "charmander", 
                        description: "La llama que arde en la punta de su cola es una indicación de sus emociones. La llama vacila cuando Charmander está disfrutando de sí mismo. Si el Pokémon se enfurece, la llama arde con fuerza.", 
                        image: "{{ asset('assets/img/pokemons/charmander.png') }}"
                    },

                    // The data model. These items would normally be requested via AJAX,
                    // but are hardcoded here for simplicity.

                    pokemons: null,

                    response: null
                },

                ready: function() {
                    
                    var resource = this.$resource('pokemons');

                    resource.get().then(function (response) {
                        this.pokemons = response.data;
                    });

                    this.updateChart();
                },

                methods: {
                    
                    updatePokemon: function(pokemon) {
                        console.log(pokemon.name);
                        this.pokemon = pokemon;
                        this.updateChart();
                        this.searchPokemon = "";
                    },

                    updateChart: function() {
                        chartPokemon.datasets.forEach(function(element, index, array){
                            element.points.forEach(function(elementPoint, indexPoint, arrayPoint){
                                elementPoint.value = Math.floor((Math.random() * 100) + 1);
                            });
                        });

                        chartPokemon.update();
                    },

                    firstMayus: function(string){
                        return string.charAt(0).toUpperCase() + string.slice(1);
                    }

                }

            });
        </script>


    </body>
</html>