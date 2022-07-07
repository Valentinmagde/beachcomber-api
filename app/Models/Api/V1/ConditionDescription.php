<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ConditionDescription
 * 
 * @property int $condition_desc_id
 * @property int|null $condition_id
 * @property string $description
 * @property int|null $language_id
 *
 * @package App\Models
 */
class ConditionDescription extends Model
{
	protected $table = 'condition_description';
	protected $primaryKey = 'condition_desc_id';
	public $timestamps = false;

	protected $casts = [
		'condition_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'condition_id',
		'description',
		'language_id'
	];
}
