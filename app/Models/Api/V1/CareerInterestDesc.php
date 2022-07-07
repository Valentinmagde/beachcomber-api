<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CareerInterestDesc
 * 
 * @property int $career_interest_desc_id
 * @property int $career_interest_id
 * @property string|null $description
 * @property int $language_id
 * @property int|null $active
 *
 * @package App\Models
 */
class CareerInterestDesc extends Model
{
	protected $table = 'career_interest_desc';
	protected $primaryKey = 'career_interest_desc_id';
	public $timestamps = false;

	protected $casts = [
		'career_interest_id' => 'int',
		'language_id' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'career_interest_id',
		'description',
		'language_id',
		'active'
	];
}
