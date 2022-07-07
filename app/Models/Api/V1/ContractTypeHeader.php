<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContractTypeHeader
 * 
 * @property int $id
 * @property int $contract_type_id
 * @property string|null $description
 * @property int|null $sort_order
 *
 * @package App\Models
 */
class ContractTypeHeader extends Model
{
	protected $table = 'contract_type_header';
	public $timestamps = false;

	protected $casts = [
		'contract_type_id' => 'int',
		'sort_order' => 'int'
	];

	protected $fillable = [
		'contract_type_id',
		'description',
		'sort_order'
	];
}
