<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TransferTypeMappingDescription
 * 
 * @property int $transfer_type_mapping_id
 * @property int $transfer_type_id
 * @property string $transfer_mapping_name
 * @property string $vehicle_mapping_name
 * @property int $mtco_transfer_type_id
 * @property int $mtco_vehicle_type_id
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class TransferTypeMappingDescription extends Model
{
	protected $table = 'transfer_type_mapping_description';
	protected $primaryKey = 'transfer_type_mapping_id';
	public $timestamps = false;

	protected $casts = [
		'transfer_type_id' => 'int',
		'mtco_transfer_type_id' => 'int',
		'mtco_vehicle_type_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'transfer_type_id',
		'transfer_mapping_name',
		'vehicle_mapping_name',
		'mtco_transfer_type_id',
		'mtco_vehicle_type_id',
		'valid_from',
		'valid_to'
	];
}
