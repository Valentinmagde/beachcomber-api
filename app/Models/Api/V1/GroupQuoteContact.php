<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupQuoteContact
 * 
 * @property int $id
 * @property string $title
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $tel
 * @property string $fax
 * @property int $active
 * @property Carbon $created
 * @property int $created_by
 * @property Carbon|null $updated
 * @property int|null $updated_by
 *
 * @package App\Models
 */
class GroupQuoteContact extends Model
{
	protected $table = 'group_quote_contact';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $dates = [
		'created',
		'updated'
	];

	protected $fillable = [
		'title',
		'first_name',
		'last_name',
		'email',
		'tel',
		'fax',
		'active',
		'created',
		'created_by',
		'updated',
		'updated_by'
	];
}
