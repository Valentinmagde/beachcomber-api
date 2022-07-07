<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RmOfferPeriodNote
 * 
 * @property int $id
 * @property string $label
 * @property int $active
 *
 * @package App\Models
 */
class RmOfferPeriodNote extends Model
{
	protected $table = 'rm_offer_period_note';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int'
	];

	protected $fillable = [
		'label',
		'active'
	];
}
