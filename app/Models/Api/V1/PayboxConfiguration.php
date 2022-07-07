<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PayboxConfiguration
 * 
 * @property int $config_id
 * @property string $config_name
 * @property string $config_value
 * @property string $config_category
 * @property int $config_for
 * @property int $active
 *
 * @package App\Models
 */
class PayboxConfiguration extends Model
{
	protected $table = 'paybox_configuration';
	protected $primaryKey = 'config_id';
	public $timestamps = false;

	protected $casts = [
		'config_for' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'config_name',
		'config_value',
		'config_category',
		'config_for',
		'active'
	];
}
