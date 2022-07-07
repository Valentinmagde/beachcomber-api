<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SettingsParameter
 * 
 * @property int $id
 * @property int $setting_id
 * @property string $param_name
 * @property string $param_value
 * @property Carbon $created
 * @property bool $status
 *
 * @package App\Models
 */
class SettingsParameter extends Model
{
	protected $table = 'settings_parameters';
	public $timestamps = false;

	protected $casts = [
		'setting_id' => 'int',
		'status' => 'bool'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'setting_id',
		'param_name',
		'param_value',
		'created',
		'status'
	];
}
