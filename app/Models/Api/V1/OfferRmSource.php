<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OfferRmSource
 * 
 * @property int $id
 * @property int $offer_id
 * @property int $source_id
 * @property Carbon $assigned_date
 *
 * @package App\Models
 */
class OfferRmSource extends Model
{
	protected $table = 'offer_rm_source';
	public $timestamps = false;

	protected $casts = [
		'offer_id' => 'int',
		'source_id' => 'int'
	];

	protected $dates = [
		'assigned_date'
	];

	protected $fillable = [
		'offer_id',
		'source_id',
		'assigned_date'
	];
}
