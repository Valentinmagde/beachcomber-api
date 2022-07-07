<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AmenityDescription
 * 
 * @property int $amenity_desc_id
 * @property int $amenity_id
 * @property int $language_id
 * @property string $description
 *
 * @package App\Models
 */
class AmenityDescription extends Model
{
	protected $table = 'amenity_description';
	protected $primaryKey = 'amenity_desc_id';
	public $timestamps = false;

	protected $casts = [
		'amenity_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'amenity_id',
		'language_id',
		'description'
	];
}
