<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Room
 * 
 * @property int $room_id
 * @property int $based_on_id
 * @property int $room_category_id
 * @property int $view_id
 * @property int $hotel_id
 * @property string $name
 * @property string $name_alias
 * @property int $rate_type_id
 * @property int $tariff_type_id
 * @property int $can_book_online
 * @property int $adult
 * @property int $child
 * @property int $teen
 * @property int $infant
 * @property int $adult_sharing
 * @property int $child_sharing
 * @property int $teen_sharing
 * @property int $child_min_age
 * @property int $child_max_age
 * @property int $infant_min_age
 * @property int $infant_max_age
 * @property int $teen_min_age
 * @property int $teen_max_age
 * @property int $no_available
 * @property int $no_person
 * @property int $no_bedroom
 * @property int $no_bathroom
 * @property int $no_toilets
 * @property int $surface_area
 * @property int $terrace_area
 * @property int $is_for_honeymoon
 * @property int $is_featured
 * @property int $is_web_exclusive
 * @property int $is_for_family
 * @property bool $is_derived_for_family
 * @property int $is_for_golf
 * @property int $is_sold_to_mauritian
 * @property int $is_available_at_resa
 * @property int $has_club_access
 * @property string $image_path
 * @property string $video_path
 * @property int $display_ranking
 * @property Carbon $available_from
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property bool $is_on_sale
 * @property bool $on_factsheet
 * @property bool $on_status_report
 * @property bool $is_virtual
 * @property int $is_sold_on_ota
 * @property string $pms_code
 * @property int $asterix_id
 * @property int $status_ranking
 * @property int $report_order
 * @property int $tariff_third_person
 * @property int $tariff_show_third_child
 *
 * @package App\Models
 */
class Room extends Model
{
	protected $table = 'room';
	protected $primaryKey = 'room_id';
	public $timestamps = false;

	protected $casts = [
		'based_on_id' => 'int',
		'room_category_id' => 'int',
		'view_id' => 'int',
		'hotel_id' => 'int',
		'rate_type_id' => 'int',
		'tariff_type_id' => 'int',
		'can_book_online' => 'int',
		'adult' => 'int',
		'child' => 'int',
		'teen' => 'int',
		'infant' => 'int',
		'adult_sharing' => 'int',
		'child_sharing' => 'int',
		'teen_sharing' => 'int',
		'child_min_age' => 'int',
		'child_max_age' => 'int',
		'infant_min_age' => 'int',
		'infant_max_age' => 'int',
		'teen_min_age' => 'int',
		'teen_max_age' => 'int',
		'no_available' => 'int',
		'no_person' => 'int',
		'no_bedroom' => 'int',
		'no_bathroom' => 'int',
		'no_toilets' => 'int',
		'surface_area' => 'int',
		'terrace_area' => 'int',
		'is_for_honeymoon' => 'int',
		'is_featured' => 'int',
		'is_web_exclusive' => 'int',
		'is_for_family' => 'int',
		'is_derived_for_family' => 'bool',
		'is_for_golf' => 'int',
		'is_sold_to_mauritian' => 'int',
		'is_available_at_resa' => 'int',
		'has_club_access' => 'int',
		'display_ranking' => 'int',
		'is_on_sale' => 'bool',
		'on_factsheet' => 'bool',
		'on_status_report' => 'bool',
		'is_virtual' => 'bool',
		'is_sold_on_ota' => 'int',
		'asterix_id' => 'int',
		'status_ranking' => 'int',
		'report_order' => 'int',
		'tariff_third_person' => 'int',
		'tariff_show_third_child' => 'int'
	];

	protected $dates = [
		'available_from',
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'based_on_id',
		'room_category_id',
		'view_id',
		'hotel_id',
		'name',
		'name_alias',
		'rate_type_id',
		'tariff_type_id',
		'can_book_online',
		'adult',
		'child',
		'teen',
		'infant',
		'adult_sharing',
		'child_sharing',
		'teen_sharing',
		'child_min_age',
		'child_max_age',
		'infant_min_age',
		'infant_max_age',
		'teen_min_age',
		'teen_max_age',
		'no_available',
		'no_person',
		'no_bedroom',
		'no_bathroom',
		'no_toilets',
		'surface_area',
		'terrace_area',
		'is_for_honeymoon',
		'is_featured',
		'is_web_exclusive',
		'is_for_family',
		'is_derived_for_family',
		'is_for_golf',
		'is_sold_to_mauritian',
		'is_available_at_resa',
		'has_club_access',
		'image_path',
		'video_path',
		'display_ranking',
		'available_from',
		'valid_from',
		'valid_to',
		'is_on_sale',
		'on_factsheet',
		'on_status_report',
		'is_virtual',
		'is_sold_on_ota',
		'pms_code',
		'asterix_id',
		'status_ranking',
		'report_order',
		'tariff_third_person',
		'tariff_show_third_child'
	];
}
