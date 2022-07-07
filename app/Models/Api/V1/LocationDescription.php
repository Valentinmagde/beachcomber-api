<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LocationDescription
 * 
 * @property int $location_desc_id
 * @property int $location_id
 * @property int $language_id
 * @property string $name
 *
 * @package App\Models
 */
class LocationDescription extends Model
{
	protected $table = 'location_description';
	protected $primaryKey = 'location_desc_id';
	public $timestamps = false;

	protected $casts = [
		'location_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'location_id',
		'language_id',
		'name'
	];
}
