<?php

use Illuminate\Database\Seeder;
use App\Pokemon;

class PokemonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pokemons = [
        	[
                "name" => "charmander",
                "description" => "La llama que arde en la punta de su cola es una indicación de sus emociones. La llama vacila cuando Charmander está disfrutando de sí mismo. Si el Pokémon se enfurece, la llama arde con fuerza."
            ],
            [
                "name" => "charmeleon",
                "description" => "Charmeleon destruye sin piedad a sus enemigos utilizando sus garras afiladas. Si se encuentra con un enemigo fuerte, se vuelve agresivo. En este estado de excitación, la llama en la punta de su cola se enciende con un color blanco azulado."
            ],
            [
                "name" => "charizard",
                "description" => "Charizard vuela por el cielo en busca de oponentes poderosos. Se respira el fuego de tan gran calor que se funde nada. Sin embargo, nunca lanza su aliento de fuego en cualquier oponente más si este es débil."
            ],
            [
                "name" => "squirtle",
                "description" => "El caparazón de Squirtle no se utiliza simplemente para la protección, su forma redondeada de la cáscara y las ranuras en su superficie ayudan a minimizar la resistencia en el agua, lo que permite este Pokémon el nadar a altas velocidades."
            ],
            [
                "name" => "wartortle",
                "description" => "Su cola es grande y cubierta con un pelo abundante y grueso. La cola se vuelve cada vez más profundo en color que las edades Wartortle. Los arañazos en su cáscara son una prueba de la resistencia de este Pokémon como un luchador."
            ],
            [
                "name" => "blastoise",
                "description" => "Blastoise tiene chorros de agua que sobresalen de su caparazón. Los chorros de agua son muy precisos. Ellos pueden disparar balas de agua con suficiente precisión para golpear latas vacías desde una distancia de más de 160 pies."
            ],
            [
                "name" => "bulbasaur",
                "description" => "Bulbasaur puede verse siestas en la luz del sol. Hay una semilla en su parte posterior. Al absorber los rayos del sol, la semilla crece progresivamente más grandes."
            ],
            [
                "name" => "ivysaur",
                "description" => "Hay un botón en la espalda de este Pokémon. Para soportar su peso, piernas y el tronco de Ivysaur crecen gruesas y fuertes. Si comienza a pasar más tiempo tumbado en la luz del sol, que es una señal de que el brote florecerá en una gran flor pronto.",
            ],
            [
                "name" => "venusaur",
                "description" => "Hay una gran flor en la espalda de Venusaur. La flor se dice que tiene unos colores muy vivos si se pone un montón de la nutrición y la luz solar. El aroma de la flor de la sede de las emociones de la gente."
            ],
            [
                "name" => "pikachu",
                "description" => "Siempre que Pikachu se encuentra con algo nuevo, que las explosiones con una descarga de electricidad. Si se encuentra con una baya ennegrecida, es evidencia de que este Pokémon confundió la intensidad de su carga."
            ],
            [
                "name" => "raichu",
                "description" => "Si los sacos eléctricas se vuelven excesivamente cargadas, Raichu planta su cola en el suelo y las descargas. chamuscados parches de tierra se encuentran cerca de la jerarquía de este Pokémon."
            ]
        ];

        foreach ($pokemons as $pokemon) 
        {
        	Pokemon::create($pokemon);
        }

    }
}
