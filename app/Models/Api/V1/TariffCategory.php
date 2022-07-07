<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TariffCategory
 * 
 * @property int $tariff_category_id
 * @property string $tariff_category
 * @property string $tariff_category_code
 * @property string $tariff_hms_code
 * @property string $tariff_category_alias
 * @property int $tariff_category_rank
 * @property int $rate_manager_id
 * @property int $active
 *
 * @package App\Models
 */
class TariffCategory extends Model
{
	protected $table = 'tariff_category';
	protected $primaryKey = 'tariff_category_id';
	public $timestamps = false;

	protected $casts = [
		'tariff_category_rank' => 'int',
		'rate_manager_id' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'tariff_category',
		'tariff_category_code',
		'tariff_hms_code',
		'tariff_category_alias',
		'tariff_category_rank',
		'rate_manager_id',
		'active'
	];
}
