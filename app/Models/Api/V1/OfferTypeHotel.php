<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OfferTypeHotel
 * 
 * @property int $hotel_offer_type_id
 * @property int $hotel_id
 * @property int $offer_type_id
 * @property string|null $bg_color
 * @property string|null $image_name
 * @property string|null $image_path
 * @property int $display_ranking
 * @property int $in_offer_list
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class OfferTypeHotel extends Model
{
	protected $table = 'offer_type_hotel';
	protected $primaryKey = 'hotel_offer_type_id';
	public $timestamps = false;

	protected $casts = [
		'hotel_id' => 'int',
		'offer_type_id' => 'int',
		'display_ranking' => 'int',
		'in_offer_list' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'hotel_id',
		'offer_type_id',
		'bg_color',
		'image_name',
		'image_path',
		'display_ranking',
		'in_offer_list',
		'valid_from',
		'valid_to'
	];
}
