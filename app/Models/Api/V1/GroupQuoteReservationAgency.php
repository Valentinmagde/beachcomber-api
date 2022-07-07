<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupQuoteReservationAgency
 * 
 * @property int $id
 * @property int $quote_id
 * @property int $agency_id
 * @property int|null $active
 * @property Carbon $created
 * @property int $created_by
 * @property Carbon|null $updated
 * @property int|null $updated_by
 *
 * @package App\Models
 */
class GroupQuoteReservationAgency extends Model
{
	protected $table = 'group_quote_reservation_agency';
	public $timestamps = false;

	protected $casts = [
		'quote_id' => 'int',
		'agency_id' => 'int',
		'active' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $dates = [
		'created',
		'updated'
	];

	protected $fillable = [
		'quote_id',
		'agency_id',
		'active',
		'created',
		'created_by',
		'updated',
		'updated_by'
	];
}
