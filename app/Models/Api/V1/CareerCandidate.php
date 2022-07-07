<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CareerCandidate
 * 
 * @property int $candidate_id
 * @property string $candidate_title
 * @property string $candidate_surname
 * @property string $candidate_othernames
 * @property string $candidate_email
 * @property string|null $candidate_phone
 * @property int $country_id
 *
 * @package App\Models
 */
class CareerCandidate extends Model
{
	protected $table = 'career_candidate';
	protected $primaryKey = 'candidate_id';
	public $timestamps = false;

	protected $casts = [
		'country_id' => 'int'
	];

	protected $fillable = [
		'candidate_title',
		'candidate_surname',
		'candidate_othernames',
		'candidate_email',
		'candidate_phone',
		'country_id'
	];
}
