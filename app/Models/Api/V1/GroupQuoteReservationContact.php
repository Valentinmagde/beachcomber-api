<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupQuoteReservationContact
 * 
 * @property int $quote_reservation_contact_id
 * @property int $quote_reservation_id
 * @property int $contact_id
 * @property bool|null $main_contact
 * @property int|null $active
 * @property Carbon $created
 * @property int $created_by
 * @property Carbon|null $updated
 * @property int|null $updated_by
 *
 * @package App\Models
 */
class GroupQuoteReservationContact extends Model
{
	protected $table = 'group_quote_reservation_contact';
	protected $primaryKey = 'quote_reservation_contact_id';
	public $timestamps = false;

	protected $casts = [
		'quote_reservation_id' => 'int',
		'contact_id' => 'int',
		'main_contact' => 'bool',
		'active' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $dates = [
		'created',
		'updated'
	];

	protected $fillable = [
		'quote_reservation_id',
		'contact_id',
		'main_contact',
		'active',
		'created',
		'created_by',
		'updated',
		'updated_by'
	];
}
