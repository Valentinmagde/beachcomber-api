<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Bar
 * 
 * @property int $bar_id
 * @property Carbon $opening_time
 * @property Carbon $closing_time
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property string $bar_name
 * @property string $bar_image
 * @property int $hotel_id
 *
 * @package App\Models
 */
class Bar extends Model
{
	protected $table = 'bar';
	protected $primaryKey = 'bar_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int'
	];

	protected $dates = [
		'opening_time',
		'closing_time',
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'opening_time',
		'closing_time',
		'valid_from',
		'valid_to',
		'bar_name',
		'bar_image',
		'hotel_id'
	];
}
