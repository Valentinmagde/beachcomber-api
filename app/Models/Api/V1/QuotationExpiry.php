<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class QuotationExpiry
 * 
 * @property int $quote_expiry_id
 * @property int $quote_id
 * @property Carbon $quote_date
 * @property Carbon $quote_expiry_date
 * @property int $expiry_interval_type_id
 * @property string $expiry_interval_type
 * @property int $expiry_interval
 * @property int $active
 *
 * @package App\Models
 */
class QuotationExpiry extends Model
{
	protected $table = 'quotation_expiry';
	protected $primaryKey = 'quote_expiry_id';
	public $timestamps = false;

	protected $casts = [
		'quote_id' => 'int',
		'expiry_interval_type_id' => 'int',
		'expiry_interval' => 'int',
		'active' => 'int'
	];

	protected $dates = [
		'quote_date',
		'quote_expiry_date'
	];

	protected $fillable = [
		'quote_id',
		'quote_date',
		'quote_expiry_date',
		'expiry_interval_type_id',
		'expiry_interval_type',
		'expiry_interval',
		'active'
	];
}
