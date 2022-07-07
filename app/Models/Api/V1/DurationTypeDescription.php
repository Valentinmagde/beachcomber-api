<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DurationTypeDescription
 * 
 * @property int $duration_type_desc_id
 * @property int $duration_type_id
 * @property int $language_id
 * @property string $description
 *
 * @package App\Models
 */
class DurationTypeDescription extends Model
{
	protected $table = 'duration_type_description';
	protected $primaryKey = 'duration_type_desc_id';
	public $timestamps = false;

	protected $casts = [
		'duration_type_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'duration_type_id',
		'language_id',
		'description'
	];
}
