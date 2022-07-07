<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CancelationReason
 * 
 * @property int $id
 * @property string $description
 * @property string $pms_code
 * @property string $hms_code
 * @property int|null $active
 *
 * @package App\Models
 */
class CancelationReason extends Model
{
	protected $table = 'cancelation_reason';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int'
	];

	protected $fillable = [
		'description',
		'pms_code',
		'hms_code',
		'active'
	];
}
