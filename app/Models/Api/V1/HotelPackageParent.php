<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelPackageParent
 * 
 * @property int $rm_package_id
 * @property Carbon|null $active_from
 * @property Carbon|null $active_to
 * @property bool $active
 *
 * @package App\Models
 */
class HotelPackageParent extends Model
{
	protected $table = 'hotel_package_parent';
	protected $primaryKey = 'rm_package_id';
	public $timestamps = false;

	protected $casts = [
		'active' => 'bool'
	];

	protected $dates = [
		'active_from',
		'active_to'
	];

	protected $fillable = [
		'active_from',
		'active_to',
		'active'
	];
}
