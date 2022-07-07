<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OtaOffer
 * 
 * @property int $id
 * @property string $alias
 * @property string $Name
 * @property int $percentage
 * @property bool $status
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property Carbon $created
 *
 * @package App\Models
 */
class OtaOffer extends Model
{
	protected $table = 'ota_offer';
	public $timestamps = false;

	protected $casts = [
		'percentage' => 'int',
		'status' => 'bool'
	];

	protected $dates = [
		'valid_from',
		'valid_to',
		'created'
	];

	protected $fillable = [
		'alias',
		'Name',
		'percentage',
		'status',
		'valid_from',
		'valid_to',
		'created'
	];
}
