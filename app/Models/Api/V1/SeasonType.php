<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SeasonType
 * 
 * @property int $id
 * @property string $label
 * @property int $active
 * @property string|null $bg_color
 *
 * @package App\Models
 */
class SeasonType extends Model
{
	protected $table = 'season_type';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int'
	];

	protected $fillable = [
		'label',
		'active',
		'bg_color'
	];
}
