<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TariffRemark
 * 
 * @property int $tariff_remarks_id
 * @property int $tariff_id
 * @property int|null $language_id
 * @property string $remarks
 *
 * @package App\Models
 */
class TariffRemark extends Model
{
	protected $table = 'tariff_remarks';
	protected $primaryKey = 'tariff_remarks_id';
	public $timestamps = false;

	protected $casts = [
		'tariff_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'tariff_id',
		'language_id',
		'remarks'
	];
}
