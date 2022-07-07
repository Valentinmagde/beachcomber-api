<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class QuotationEmailLog
 * 
 * @property int $id
 * @property string $message
 * @property string $country
 * @property string $email
 * @property Carbon|null $stamp
 *
 * @package App\Models
 */
class QuotationEmailLog extends Model
{
	protected $table = 'quotation_email_log';
	public $timestamps = false;

	protected $dates = [
		'stamp'
	];

	protected $fillable = [
		'message',
		'country',
		'email',
		'stamp'
	];
}
