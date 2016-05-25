<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Pokemon;

class PokemonAPIController extends Controller
{

	public function all()
	{

		$resources = [];

		foreach (Pokemon::all() as $pokemon)
		{
			$resources[] = $this->assembler($pokemon);
		}

		return $resources;
	}


	public function find($id)
	{
		$pokemon = Pokemon::find($id);

		if($pokemon == null)
			return $pokemon;

		return $this->assembler($pokemon);
	}

	private function assembler(Pokemon $pokemon)
	{

		if($pokemon == null)
			return [];

		return [
			"name" => $pokemon->name,
			"description" => $pokemon->description,
			"url" => "#" .  $pokemon->name,
			"image" => asset("assets/img/pokemons/" . $pokemon->name . ".png")
		];
	}

}
