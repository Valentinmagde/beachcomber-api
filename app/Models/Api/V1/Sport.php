<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sport
 * 
 * @property int $sport_id
 * @property int|null $sport_type_id
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 *
 * @package App\Models
 */
class Sport extends Model
{
	protected $table = 'sport';
	protected $primaryKey = 'sport_id';
	public $timestamps = false;

	protected $casts = [
		'sport_type_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'sport_type_id',
		'valid_from',
		'valid_to'
	];
}
