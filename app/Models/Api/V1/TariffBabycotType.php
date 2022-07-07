<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TariffBabycotType
 * 
 * @property int $tariff_babycot_type_id
 * @property string|null $babycot_type
 *
 * @package App\Models
 */
class TariffBabycotType extends Model
{
	protected $table = 'tariff_babycot_type';
	protected $primaryKey = 'tariff_babycot_type_id';
	public $timestamps = false;

	protected $fillable = [
		'babycot_type'
	];
}
