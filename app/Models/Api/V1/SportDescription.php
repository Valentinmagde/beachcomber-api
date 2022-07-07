<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SportDescription
 * 
 * @property int $sport_desc_id
 * @property int $sport_id
 * @property int $language_id
 * @property string $name
 *
 * @package App\Models
 */
class SportDescription extends Model
{
	protected $table = 'sport_description';
	protected $primaryKey = 'sport_desc_id';
	public $timestamps = false;

	protected $casts = [
		'sport_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'sport_id',
		'language_id',
		'name'
	];
}
