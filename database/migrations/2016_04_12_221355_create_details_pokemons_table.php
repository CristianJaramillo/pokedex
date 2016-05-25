<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsPokemonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details_pokemons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pokemon_id')->unsigned()->unique();
            $table->foreign('pokemon_id')
                    ->references('id')
                    ->on('pokemons');
            $table->integer('pre_evolution')->unsigned();
            $table->foreign('pre_evolution')
                    ->references('id')
                    ->on('pokemons');
            $table->integer('next_evolution')->unsigned();
            $table->foreign('next_evolution')
                    ->references('id')
                    ->on('pokemons');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details_pokemons');
    }
}
