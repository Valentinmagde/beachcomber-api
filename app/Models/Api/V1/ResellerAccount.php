<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ResellerAccount
 * 
 * @property int $id
 * @property string $name
 * @property int $active
 *
 * @package App\Models
 */
class ResellerAccount extends Model
{
	protected $table = 'reseller_account';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int'
	];

	protected $fillable = [
		'name',
		'active'
	];
}
