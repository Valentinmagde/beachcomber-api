<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ExcursionDescription
 * 
 * @property int $excursion_desc_id
 * @property int $excursion_id
 * @property string $excursion_name
 * @property int $language_id
 *
 * @package App\Models
 */
class ExcursionDescription extends Model
{
	protected $table = 'excursion_description';
	protected $primaryKey = 'excursion_desc_id';
	public $timestamps = false;

	protected $casts = [
		'excursion_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'excursion_id',
		'excursion_name',
		'language_id'
	];
}
