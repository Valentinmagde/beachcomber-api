<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class QuoteMessageTemplateMarket
 * 
 * @property int $quote_message_template_id
 * @property int $market_id
 *
 * @package App\Models
 */
class QuoteMessageTemplateMarket extends Model
{
	protected $table = 'quote_message_template_market';
	protected $primaryKey = 'quote_message_template_id';
	public $timestamps = false;

	protected $casts = [
		'market_id' => 'int'
	];

	protected $fillable = [
		'market_id'
	];
}
