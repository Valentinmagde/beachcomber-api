<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class QuoteMessageSignature
 * 
 * @property int $quote_message_signature_id
 * @property int|null $user_id
 * @property string|null $quote_message_signature
 * @property int|null $active
 *
 * @package App\Models
 */
class QuoteMessageSignature extends Model
{
	protected $table = 'quote_message_signature';
	protected $primaryKey = 'quote_message_signature_id';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'user_id',
		'quote_message_signature',
		'active'
	];
}
