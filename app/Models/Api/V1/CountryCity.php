<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CountryCity
 * 
 * @property int $id
 * @property int|null $country_id
 * @property string|null $name
 * @property string|null $note
 *
 * @package App\Models
 */
class CountryCity extends Model
{
	protected $table = 'country_city';
	public $timestamps = false;

	protected $casts = [
		'country_id' => 'int'
	];

	protected $fillable = [
		'country_id',
		'name',
		'note'
	];
}
