<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CountryAsterix
 * 
 * @property int $country_id
 * @property string $code
 * @property string $name
 * @property string $flag
 * @property string $category
 * @property string $iso_code2
 * @property string $iso_code3
 * @property int $others
 * @property int $active
 *
 * @package App\Models
 */
class CountryAsterix extends Model
{
	protected $table = 'country_asterix';
	protected $primaryKey = 'country_id';
	public $timestamps = false;

	protected $casts = [
		'others' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'code',
		'name',
		'flag',
		'category',
		'iso_code2',
		'iso_code3',
		'others',
		'active'
	];
}
