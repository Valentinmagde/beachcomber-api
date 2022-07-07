<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ClientType
 * 
 * @property int $client_type_id
 * @property string|null $client_type
 *
 * @package App\Models
 */
class ClientType extends Model
{
	protected $table = 'client_type';
	protected $primaryKey = 'client_type_id';
	public $timestamps = false;

	protected $fillable = [
		'client_type'
	];
}
