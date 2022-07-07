<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TariffImportBchRate
 * 
 * @property int $rate_import_id
 * @property int $rate_card_id
 * @property int $reseller_id
 * @property int $client_type_id
 * @property string $info
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property int $active
 *
 * @package App\Models
 */
class TariffImportBchRate extends Model
{
	protected $table = 'tariff_import_bch_rate';
	protected $primaryKey = 'rate_import_id';
	public $timestamps = false;

	protected $casts = [
		'rate_card_id' => 'int',
		'reseller_id' => 'int',
		'client_type_id' => 'int',
		'active' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'rate_card_id',
		'reseller_id',
		'client_type_id',
		'info',
		'valid_from',
		'valid_to',
		'active'
	];
}
