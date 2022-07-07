<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomerConscent
 * 
 * @property int $customer_conscent_id
 * @property int $customer_login_id
 * @property int $conscent_type_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property string|null $data
 *
 * @package App\Models
 */
class CustomerConscent extends Model
{
	protected $table = 'customer_conscent';
	protected $primaryKey = 'customer_conscent_id';
	public $timestamps = false;

	protected $casts = [
		'customer_login_id' => 'int',
		'conscent_type_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'customer_login_id',
		'conscent_type_id',
		'valid_from',
		'valid_to',
		'data'
	];
}
