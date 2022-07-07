<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomerConscentType
 * 
 * @property int $conscent_type_id
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 * @property string $name
 *
 * @package App\Models
 */
class CustomerConscentType extends Model
{
	protected $table = 'customer_conscent_type';
	protected $primaryKey = 'conscent_type_id';
	public $timestamps = false;

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'valid_from',
		'valid_to',
		'name'
	];
}
