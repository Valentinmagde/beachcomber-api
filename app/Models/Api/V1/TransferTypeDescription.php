<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TransferTypeDescription
 * 
 * @property int $transfer_type_desc_id
 * @property int $transfer_type_id
 * @property string $transfer_type_description
 * @property int $language_id
 *
 * @package App\Models
 */
class TransferTypeDescription extends Model
{
	protected $table = 'transfer_type_description';
	protected $primaryKey = 'transfer_type_desc_id';
	public $timestamps = false;

	protected $casts = [
		'transfer_type_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'transfer_type_id',
		'transfer_type_description',
		'language_id'
	];
}
