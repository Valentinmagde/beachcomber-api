<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RmOffer
 * 
 * @property int $id
 * @property int $offer_cat_id
 * @property int $offer_cat2_id
 * @property int $year_id
 * @property int $offer_type_id
 * @property string $offer_type_name
 * @property string $name
 * @property string $printed_name
 * @property string $description
 * @property int $currency_id
 * @property float|null $numeric_offer
 * @property int $combinable_all
 * @property int $hotel_id
 * @property Carbon $hotel_date
 * @property int $market_id
 * @property int $country_id
 * @property Carbon $country_date
 * @property int $reseller_id
 * @property Carbon $reseller_date
 * @property Carbon|null $date_issued
 * @property int $active
 *
 * @package App\Models
 */
class RmOffer extends Model
{
	protected $table = 'rm_offer';
	public $timestamps = false;

	protected $casts = [
		'offer_cat_id' => 'int',
		'offer_cat2_id' => 'int',
		'year_id' => 'int',
		'offer_type_id' => 'int',
		'currency_id' => 'int',
		'numeric_offer' => 'float',
		'combinable_all' => 'int',
		'hotel_id' => 'int',
		'market_id' => 'int',
		'country_id' => 'int',
		'reseller_id' => 'int',
		'active' => 'int'
	];

	protected $dates = [
		'hotel_date',
		'country_date',
		'reseller_date',
		'date_issued'
	];

	protected $fillable = [
		'offer_cat_id',
		'offer_cat2_id',
		'year_id',
		'offer_type_id',
		'offer_type_name',
		'name',
		'printed_name',
		'description',
		'currency_id',
		'numeric_offer',
		'combinable_all',
		'hotel_id',
		'hotel_date',
		'market_id',
		'country_id',
		'country_date',
		'reseller_id',
		'reseller_date',
		'date_issued',
		'active'
	];
}
