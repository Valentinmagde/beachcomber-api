<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpaDescription
 * 
 * @property int $spa_desc_id
 * @property int $spa_id
 * @property int $language_id
 * @property string $short_description
 * @property string $description
 * @property string $information
 * @property string $facilities
 *
 * @package App\Models
 */
class SpaDescription extends Model
{
	protected $table = 'spa_description';
	protected $primaryKey = 'spa_desc_id';
	public $timestamps = false;

	protected $casts = [
		'spa_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'spa_id',
		'language_id',
		'short_description',
		'description',
		'information',
		'facilities'
	];
}
