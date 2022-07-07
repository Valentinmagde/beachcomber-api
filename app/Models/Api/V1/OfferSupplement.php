<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OfferSupplement
 * 
 * @property int $offer_supplement_id
 * @property int $offer_id
 * @property string $offer_supplement_name
 * @property string $offer_supplement_currency
 * @property int $offer_supplement_tariff_type_id
 * @property string $offer_supplement_tariff_type
 * @property float $offer_supplement_adult
 * @property float $offer_supplement_child
 * @property float $offer_supplement_teen
 *
 * @package App\Models
 */
class OfferSupplement extends Model
{
	protected $table = 'offer_supplement';
	protected $primaryKey = 'offer_supplement_id';
	public $timestamps = false;

	protected $casts = [
		'offer_id' => 'int',
		'offer_supplement_tariff_type_id' => 'int',
		'offer_supplement_adult' => 'float',
		'offer_supplement_child' => 'float',
		'offer_supplement_teen' => 'float'
	];

	protected $fillable = [
		'offer_id',
		'offer_supplement_name',
		'offer_supplement_currency',
		'offer_supplement_tariff_type_id',
		'offer_supplement_tariff_type',
		'offer_supplement_adult',
		'offer_supplement_child',
		'offer_supplement_teen'
	];
}
