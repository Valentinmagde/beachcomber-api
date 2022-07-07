<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SportTypeDescription
 * 
 * @property int $sport_type_desc_id
 * @property int $sport_type_id
 * @property int $language_id
 * @property string $name
 *
 * @package App\Models
 */
class SportTypeDescription extends Model
{
	protected $table = 'sport_type_description';
	protected $primaryKey = 'sport_type_desc_id';
	public $timestamps = false;

	protected $casts = [
		'sport_type_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'sport_type_id',
		'language_id',
		'name'
	];
}
