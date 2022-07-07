<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelPolicyDescription
 * 
 * @property int $hotel_policy_desc_id
 * @property int $hotel_policy_id
 * @property int $language_id
 * @property string $name
 * @property string $description
 *
 * @package App\Models
 */
class HotelPolicyDescription extends Model
{
	protected $table = 'hotel_policy_description';
	protected $primaryKey = 'hotel_policy_desc_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_policy_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'hotel_policy_id',
		'language_id',
		'name',
		'description'
	];
}
