<?php

/**
 * Created by Reliese Model.
 */

namespace app\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Produto extends Model
{
	
	use HasFactory;
	
	public $timestamps = false;



	protected $fillable = [
		'categoria',
		'preco',
		'modelo',
        'dimensoes',
		'marca',
		'id',
		'preco',
		'uso'
		
	];

	public function categorias()
	{
		return $this->hasMany(categoria::class);
	}
}
