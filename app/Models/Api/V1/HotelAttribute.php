<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelAttribute
 * 
 * @property int $hotel_attribute_id
 * @property int $hotel_id
 * @property int $attribute_id
 * @property string $attribute
 * @property int $award_body_id
 * @property string $award_body
 * @property string $logo
 * @property string $link
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property int|null $ranking
 *
 * @package App\Models
 */
class HotelAttribute extends Model
{
	protected $table = 'hotel_attribute';
	protected $primaryKey = 'hotel_attribute_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'attribute_id' => 'int',
		'award_body_id' => 'int',
		'ranking' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'hotel_id',
		'attribute_id',
		'attribute',
		'award_body_id',
		'award_body',
		'logo',
		'link',
		'valid_from',
		'valid_to',
		'ranking'
	];
}
