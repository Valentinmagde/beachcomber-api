<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RmSeasonType
 * 
 * @property int $id
 * @property string $label
 * @property int $active
 *
 * @package App\Models
 */
class RmSeasonType extends Model
{
	protected $table = 'rm_season_type';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int'
	];

	protected $fillable = [
		'label',
		'active'
	];
}
