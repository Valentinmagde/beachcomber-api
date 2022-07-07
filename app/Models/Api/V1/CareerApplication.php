<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CareerApplication
 * 
 * @property int $application_id
 * @property int $candidate_id
 * @property int $career_interest_id
 * @property int|null $mail_status
 * @property string|null $doc_name
 * @property Carbon|null $applied_date
 * @property string|null $application_message
 *
 * @package App\Models
 */
class CareerApplication extends Model
{
	protected $table = 'career_application';
	protected $primaryKey = 'application_id';
	public $timestamps = false;

	protected $casts = [
		'candidate_id' => 'int',
		'career_interest_id' => 'int',
		'mail_status' => 'int'
	];

	protected $dates = [
		'applied_date'
	];

	protected $fillable = [
		'candidate_id',
		'career_interest_id',
		'mail_status',
		'doc_name',
		'applied_date',
		'application_message'
	];
}
