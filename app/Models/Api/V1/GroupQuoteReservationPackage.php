<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupQuoteReservationPackage
 * 
 * @property int $quote_reservation_package_id
 * @property int $quote_reservation_id
 * @property int $package_id
 * @property bool $active
 * @property Carbon $created
 * @property int $created_by
 * @property Carbon|null $updated
 * @property int|null $updated_by
 *
 * @package App\Models
 */
class GroupQuoteReservationPackage extends Model
{
	protected $table = 'group_quote_reservation_package';
	protected $primaryKey = 'quote_reservation_package_id';
	public $timestamps = false;

	protected $casts = [
		'quote_reservation_id' => 'int',
		'package_id' => 'int',
		'active' => 'bool',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $dates = [
		'created',
		'updated'
	];

	protected $fillable = [
		'quote_reservation_id',
		'package_id',
		'active',
		'created',
		'created_by',
		'updated',
		'updated_by'
	];
}
