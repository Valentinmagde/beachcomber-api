<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TariffTypeDescription
 * 
 * @property int $tariff_type_desc_id
 * @property int $tariff_type_id
 * @property string $tariff_type_desc
 * @property int $language_id
 *
 * @package App\Models
 */
class TariffTypeDescription extends Model
{
	protected $table = 'tariff_type_description';
	protected $primaryKey = 'tariff_type_desc_id';
	public $timestamps = false;

	protected $casts = [
		'tariff_type_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'tariff_type_id',
		'tariff_type_desc',
		'language_id'
	];
}
