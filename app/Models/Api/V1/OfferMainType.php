<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OfferMainType
 * 
 * @property int $offer_main_type_id
 * @property string $offer_main_type
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property int $active
 *
 * @package App\Models
 */
class OfferMainType extends Model
{
	protected $table = 'offer_main_type';
	protected $primaryKey = 'offer_main_type_id';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'offer_main_type',
		'valid_from',
		'valid_to',
		'active'
	];
}
