<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupQuoteAgency
 * 
 * @property int $id
 * @property string $name
 * @property int $type_id
 * @property string $type
 * @property int $country_id
 * @property int $language_id
 * @property int $currency_id
 * @property int|null $active
 * @property Carbon $created
 * @property int $created_by
 * @property Carbon|null $updated
 * @property int|null $updated_by
 *
 * @package App\Models
 */
class GroupQuoteAgency extends Model
{
	protected $table = 'group_quote_agency';
	public $timestamps = false;

	protected $casts = [
		'type_id' => 'int',
		'country_id' => 'int',
		'language_id' => 'int',
		'currency_id' => 'int',
		'active' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $dates = [
		'created',
		'updated'
	];

	protected $fillable = [
		'name',
		'type_id',
		'type',
		'country_id',
		'language_id',
		'currency_id',
		'active',
		'created',
		'created_by',
		'updated',
		'updated_by'
	];
}
