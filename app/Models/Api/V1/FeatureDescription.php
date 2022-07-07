<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FeatureDescription
 * 
 * @property int $feature_desc_id
 * @property int|null $feature_id
 * @property int|null $language_id
 * @property string $name
 *
 * @package App\Models
 */
class FeatureDescription extends Model
{
	protected $table = 'feature_description';
	protected $primaryKey = 'feature_desc_id';
	public $timestamps = false;

	protected $casts = [
		'feature_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'feature_id',
		'language_id',
		'name'
	];
}
