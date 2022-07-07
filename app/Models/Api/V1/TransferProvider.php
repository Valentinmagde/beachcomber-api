<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TransferProvider
 * 
 * @property int $transfer_provider_id
 * @property string $transfer_provider
 * @property bool $is_hotel
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class TransferProvider extends Model
{
	protected $table = 'transfer_provider';
	protected $primaryKey = 'transfer_provider_id';
	public $timestamps = false;

	protected $casts = [
		'is_hotel' => 'bool'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'transfer_provider',
		'is_hotel',
		'valid_from',
		'valid_to'
	];
}
