<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RmMarket
 * 
 * @property int $id
 * @property int $based_on_id
 * @property string $label
 * @property int $year_id
 * @property int|null $active
 *
 * @package App\Models
 */
class RmMarket extends Model
{
	protected $table = 'rm_market';
	public $timestamps = false;

	protected $casts = [
		'based_on_id' => 'int',
		'year_id' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'based_on_id',
		'label',
		'year_id',
		'active'
	];
}
