<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class QuoteExtraRequest
 * 
 * @property int $quote_id
 * @property int $extra_id
 * @property int $extra_tariff_id
 *
 * @package App\Models
 */
class QuoteExtraRequest extends Model
{
	protected $table = 'quote_extra_request';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'quote_id' => 'int',
		'extra_id' => 'int',
		'extra_tariff_id' => 'int'
	];
}
