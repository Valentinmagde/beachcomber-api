<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContractCompany
 * 
 * @property int $id
 * @property string|null $company
 * @property int|null $active
 * @property Carbon|null $valid_from
 * @property Carbon $valid_to
 *
 * @package App\Models
 */
class ContractCompany extends Model
{
	protected $table = 'contract_company';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'company',
		'active',
		'valid_from',
		'valid_to'
	];
}
