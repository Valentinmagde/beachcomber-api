<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AmenityTypeDescription
 * 
 * @property int $amenity_type_desc_id
 * @property int $amenity_type_id
 * @property int $language_id
 * @property string $description
 *
 * @package App\Models
 */
class AmenityTypeDescription extends Model
{
	protected $table = 'amenity_type_description';
	protected $primaryKey = 'amenity_type_desc_id';
	public $timestamps = false;

	protected $casts = [
		'amenity_type_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'amenity_type_id',
		'language_id',
		'description'
	];
}
