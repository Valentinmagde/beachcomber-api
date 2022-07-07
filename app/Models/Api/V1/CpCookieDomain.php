<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CpCookieDomain
 * 
 * @property int $Cookie_Domain_ID
 * @property string $cookie_domain
 * @property string $cookie_party
 * @property string|null $privacy_policy_link
 * @property int $created_by
 * @property Carbon $created_at
 * @property Carbon $upadted_at
 *
 * @package App\Models
 */
class CpCookieDomain extends Model
{
	protected $table = 'cp_cookie_domain';
	protected $primaryKey = 'Cookie_Domain_ID';
	public $timestamps = false;

	protected $casts = [
		'created_by' => 'int'
	];

	protected $dates = [
		'upadted_at'
	];

	protected $fillable = [
		'cookie_domain',
		'cookie_party',
		'privacy_policy_link',
		'created_by',
		'upadted_at'
	];
}
