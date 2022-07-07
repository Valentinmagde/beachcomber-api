<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RmOfferPeriod
 * 
 * @property int $id
 * @property int $offer_id
 * @property Carbon $date_from
 * @property Carbon $date_to
 * @property string $note
 * @property int $note_id
 *
 * @package App\Models
 */
class RmOfferPeriod extends Model
{
	protected $table = 'rm_offer_period';
	public $timestamps = false;

	protected $casts = [
		'offer_id' => 'int',
		'note_id' => 'int'
	];

	protected $dates = [
		'date_from',
		'date_to'
	];

	protected $fillable = [
		'offer_id',
		'date_from',
		'date_to',
		'note',
		'note_id'
	];
}
