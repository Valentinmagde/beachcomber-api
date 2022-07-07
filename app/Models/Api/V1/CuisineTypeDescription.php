<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CuisineTypeDescription
 * 
 * @property int $cuisine_desc_id
 * @property int $cuisine_type_id
 * @property string $description
 * @property int $language_id
 * @property int|null $cuisine_desc_active
 *
 * @package App\Models
 */
class CuisineTypeDescription extends Model
{
	protected $table = 'cuisine_type_description';
	protected $primaryKey = 'cuisine_desc_id';
	public $timestamps = false;

	protected $casts = [
		'cuisine_type_id' => 'int',
		'language_id' => 'int',
		'cuisine_desc_active' => 'int'
	];

	protected $fillable = [
		'cuisine_type_id',
		'description',
		'language_id',
		'cuisine_desc_active'
	];
}
