<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Jeu
 * 
 * @property int $jeu_id
 * @property string|null $name
 * @property string|null $description
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 *
 * @package App\Models
 */
class Jeu extends Model
{
	protected $table = 'jeu';
	protected $primaryKey = 'jeu_id';
	public $timestamps = false;

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'name',
		'description',
		'valid_from',
		'valid_to'
	];
}
