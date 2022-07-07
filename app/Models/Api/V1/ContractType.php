<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContractType
 * 
 * @property int $id
 * @property string $name
 *
 * @package App\Models
 */
class ContractType extends Model
{
	protected $table = 'contract_type';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];
}
