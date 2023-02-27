<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Categoria
 * 
 * @property int $id
 * @property string $nome
 *
 * @package App\Models
 */
class Categoria extends Model
{
	protected $table = 'categorias';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'nome'
	];


	public function categorias()
	{
		return $this->belongsTo(produto::class);
	}
}
