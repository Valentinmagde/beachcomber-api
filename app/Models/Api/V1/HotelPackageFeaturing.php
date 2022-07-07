<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelPackageFeaturing
 * 
 * @property int $package_featuring_id
 * @property int $package_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property string|null $comments
 *
 * @package App\Models
 */
class HotelPackageFeaturing extends Model
{
	protected $table = 'hotel_package_featuring';
	protected $primaryKey = 'package_featuring_id';
	public $timestamps = false;

	protected $casts = [
		'package_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'package_id',
		'valid_from',
		'valid_to',
		'comments'
	];
}
