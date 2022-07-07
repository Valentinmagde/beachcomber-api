<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomerConscentTypeDescription
 * 
 * @property int $concent_type_desc_id
 * @property string|null $concent_type
 * @property int|null $language_id
 * @property int $concent_type_id
 *
 * @package App\Models
 */
class CustomerConscentTypeDescription extends Model
{
	protected $table = 'customer_conscent_type_description';
	protected $primaryKey = 'concent_type_desc_id';
	public $timestamps = false;

	protected $casts = [
		'language_id' => 'int',
		'concent_type_id' => 'int'
	];

	protected $fillable = [
		'concent_type',
		'language_id',
		'concent_type_id'
	];
}
