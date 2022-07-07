<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DiscountApproval
 * 
 * @property int $id
 * @property string|null $initial
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class DiscountApproval extends Model
{
	protected $table = 'discount_approval';
	public $timestamps = false;

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'initial',
		'valid_from',
		'valid_to'
	];
}
