<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 * 
 * @property int $tag_id
 * @property int $is_for_group
 * @property int $is_for_individual
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 *
 * @package App\Models
 */
class Tag extends Model
{
	protected $table = 'tag';
	protected $primaryKey = 'tag_id';
	public $timestamps = false;

	protected $casts = [
		'is_for_group' => 'int',
		'is_for_individual' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'is_for_group',
		'is_for_individual',
		'valid_from',
		'valid_to'
	];
}
