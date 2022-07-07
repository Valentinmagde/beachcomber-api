<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BarDescription
 * 
 * @property int $bar_desc_id
 * @property int $bar_id
 * @property int $language_id
 * @property string $short_description
 * @property string $opening_period
 * @property string $closing_period
 * @property string|null $long_description
 * @property string|null $practical_info
 * @property string|null $dress_code
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class BarDescription extends Model
{
	protected $table = 'bar_description';
	protected $primaryKey = 'bar_desc_id';
	public $timestamps = false;

	protected $casts = [
		'bar_id' => 'int',
		'language_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'bar_id',
		'language_id',
		'short_description',
		'opening_period',
		'closing_period',
		'long_description',
		'practical_info',
		'dress_code',
		'valid_from',
		'valid_to'
	];
}
