<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomerTitle
 * 
 * @property int $title_id
 * @property string $title
 * @property string|null $hms_code
 * @property int $gender_id
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 *
 * @package App\Models
 */
class CustomerTitle extends Model
{
	protected $table = 'customer_title';
	protected $primaryKey = 'title_id';
	public $timestamps = false;

	protected $casts = [
		'gender_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'title',
		'hms_code',
		'gender_id',
		'valid_from',
		'valid_to'
	];
}
