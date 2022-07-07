<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TransferRegionMappingDescription
 * 
 * @property int $transfer_region_mapping_id
 * @property int $region_id
 * @property string $mapping_description
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class TransferRegionMappingDescription extends Model
{
	protected $table = 'transfer_region_mapping_description';
	protected $primaryKey = 'transfer_region_mapping_id';
	public $timestamps = false;

	protected $casts = [
		'region_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'region_id',
		'mapping_description',
		'valid_from',
		'valid_to'
	];
}
