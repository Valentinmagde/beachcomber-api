<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CountryDescription
 * 
 * @property int $country_description_id
 * @property int $country_id
 * @property int $language_id
 * @property string $description
 *
 * @package App\Models
 */
class CountryDescription extends Model
{
	protected $table = 'country_description';
	protected $primaryKey = 'country_description_id';
	public $timestamps = false;

	protected $casts = [
		'country_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'country_id',
		'language_id',
		'description'
	];
}
