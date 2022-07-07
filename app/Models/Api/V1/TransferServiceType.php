<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TransferServiceType
 * 
 * @property int $transfer_service_type_id
 * @property string $transfer_service_type_code
 * @property string $transfer_service_type
 *
 * @package App\Models
 */
class TransferServiceType extends Model
{
	protected $table = 'transfer_service_type';
	protected $primaryKey = 'transfer_service_type_id';
	public $timestamps = false;

	protected $fillable = [
		'transfer_service_type_code',
		'transfer_service_type'
	];
}
