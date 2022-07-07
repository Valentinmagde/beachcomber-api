<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DiscountType
 * 
 * @property int $id
 * @property string|null $disc_type
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class DiscountType extends Model
{
	protected $table = 'discount_type';
	public $timestamps = false;

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'disc_type',
		'valid_from',
		'valid_to'
	];
}
