<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Term
 * 
 * @property int $term_id
 * @property int $term_category_id
 * @property string|null $term_name
 * @property string|null $term_category
 * @property Carbon|null $valid_from
 * @property Carbon|null $valid_to
 *
 * @package App\Models
 */
class Term extends Model
{
	protected $table = 'term';
	protected $primaryKey = 'term_id';
	public $timestamps = false;

	protected $casts = [
		'term_category_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'term_category_id',
		'term_name',
		'term_category',
		'valid_from',
		'valid_to'
	];
}
