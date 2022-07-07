<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelCancellationPolicyAssociation
 * 
 * @property int $hotel_cancellation_policy_id
 * @property int $cancellation_policy_id
 * @property int $hotel_id
 *
 * @package App\Models
 */
class HotelCancellationPolicyAssociation extends Model
{
	protected $table = 'hotel_cancellation_policy_association';
	protected $primaryKey = 'hotel_cancellation_policy_id';
	public $timestamps = false;

	protected $casts = [
		'cancellation_policy_id' => 'int',
		'hotel_id' => 'int'
	];

	protected $fillable = [
		'cancellation_policy_id',
		'hotel_id'
	];
}
