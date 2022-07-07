<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomerVipLevel
 * 
 * @property int $id
 * @property string $description
 * @property string $pms_code
 * @property int|null $active
 *
 * @package App\Models
 */
class CustomerVipLevel extends Model
{
	protected $table = 'customer_vip_level';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int'
	];

	protected $fillable = [
		'description',
		'pms_code',
		'active'
	];
}
