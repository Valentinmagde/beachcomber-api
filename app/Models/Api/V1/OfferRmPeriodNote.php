<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OfferRmPeriodNote
 * 
 * @property int $id
 * @property string $label
 * @property int $active
 *
 * @package App\Models
 */
class OfferRmPeriodNote extends Model
{
	protected $table = 'offer_rm_period_note';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int'
	];

	protected $fillable = [
		'label',
		'active'
	];
}
