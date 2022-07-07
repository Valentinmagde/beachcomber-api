<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class QuoteOperationalStatus
 * 
 * @property int $operational_status_id
 * @property string|null $operational_status
 *
 * @package App\Models
 */
class QuoteOperationalStatus extends Model
{
	protected $table = 'quote_operational_status';
	protected $primaryKey = 'operational_status_id';
	public $timestamps = false;

	protected $fillable = [
		'operational_status'
	];
}
