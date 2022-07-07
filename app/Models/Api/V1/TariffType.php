<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TariffType
 * 
 * @property int $tariff_type_id
 * @property string $tariff_type_for
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 *
 * @package App\Models
 */
class TariffType extends Model
{
	protected $table = 'tariff_type';
	protected $primaryKey = 'tariff_type_id';
	public $timestamps = false;

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'tariff_type_for',
		'valid_from',
		'valid_to'
	];
}
