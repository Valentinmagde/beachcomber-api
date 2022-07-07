<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelDescriptionAssociation
 * 
 * @property int $hotel_desc_assoc_id
 * @property int $hotel_desc_id
 * @property int $hotel_id
 * @property string $association_for
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class HotelDescriptionAssociation extends Model
{
	protected $table = 'hotel_description_association';
	protected $primaryKey = 'hotel_desc_assoc_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_desc_id' => 'int',
		'hotel_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'hotel_desc_id',
		'hotel_id',
		'association_for',
		'valid_from',
		'valid_to'
	];
}
