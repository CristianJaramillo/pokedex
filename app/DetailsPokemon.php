<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailsPokemon extends Model
{
    /**
	 * The database table used by the entitie.
	 *
	 * @var string
	 */
	protected $table = 'details_pokemons';
	
	/**
	 * The attibutes from the method create.
	 *
	 * @var array
	 */
	protected $fillable = ['pokemon_id', 'pre_evolution', 'next_evolution'];

	/**
	 * The attributes defining guarded
	 *
	 * @var array
	 */	
	protected $guarded = [];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['created_at', 'updated_at'];
}
