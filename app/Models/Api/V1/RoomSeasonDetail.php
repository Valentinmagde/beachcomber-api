<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomSeasonDetail
 * 
 * @property int $id
 * @property int|null $room_id
 * @property int $based_on_id
 * @property int $year_id
 * @property int $room_category_id
 * @property int $family_for_room_id
 * @property int $view_id
 * @property int $hotel_id
 * @property int $rate_per_id
 * @property int $tariff_type_id
 * @property string $room_code
 * @property string $name
 * @property string $printed_name
 * @property int $can_book_online
 * @property int $adult
 * @property int $child
 * @property int $teen
 * @property int $infant
 * @property int $adult_sharing
 * @property int $child_sharing
 * @property int $teen_sharing
 * @property int $no_available
 * @property int $no_person
 * @property int $no_bedroom
 * @property int $no_bathroom
 * @property int $no_toilets
 * @property int $surface_area
 * @property int $terrace_area
 * @property int $is_for_honeymoon
 * @property int $is_for_family
 * @property int $is_sold_to_mauritian
 * @property int $has_club_access
 * @property string $image_path
 * @property string $video_path
 * @property int $display_ranking
 * @property Carbon $valid_from
 * @property Carbon $valid_to
 * @property int $asterix_id
 * @property int|null $site_id
 * @property int $qty
 * @property string $cap_rel
 * @property int $cap_adult
 * @property int $cap_child
 * @property int $cap_teen
 * @property int $cap_adult_only
 * @property int $cap_child_age_id
 * @property int $cap_teen_age_id
 * @property int $has_third_person
 * @property int $has_third_person_child
 * @property int $is_family_tariff
 * @property int $display_tariff_as_pax
 * @property int $exportable_to_ota
 * @property int $sort_order
 * @property int $active
 * @property int $tariff_category_id
 *
 * @package App\Models
 */
class RoomSeasonDetail extends Model
{
	protected $table = 'room_season_details';
	public $timestamps = false;

	protected $casts = [
		'room_id' => 'int',
		'based_on_id' => 'int',
		'year_id' => 'int',
		'room_category_id' => 'int',
		'family_for_room_id' => 'int',
		'view_id' => 'int',
		'hotel_id' => 'int',
		'rate_per_id' => 'int',
		'tariff_type_id' => 'int',
		'can_book_online' => 'int',
		'adult' => 'int',
		'child' => 'int',
		'teen' => 'int',
		'infant' => 'int',
		'adult_sharing' => 'int',
		'child_sharing' => 'int',
		'teen_sharing' => 'int',
		'no_available' => 'int',
		'no_person' => 'int',
		'no_bedroom' => 'int',
		'no_bathroom' => 'int',
		'no_toilets' => 'int',
		'surface_area' => 'int',
		'terrace_area' => 'int',
		'is_for_honeymoon' => 'int',
		'is_for_family' => 'int',
		'is_sold_to_mauritian' => 'int',
		'has_club_access' => 'int',
		'display_ranking' => 'int',
		'asterix_id' => 'int',
		'site_id' => 'int',
		'qty' => 'int',
		'cap_adult' => 'int',
		'cap_child' => 'int',
		'cap_teen' => 'int',
		'cap_adult_only' => 'int',
		'cap_child_age_id' => 'int',
		'cap_teen_age_id' => 'int',
		'has_third_person' => 'int',
		'has_third_person_child' => 'int',
		'is_family_tariff' => 'int',
		'display_tariff_as_pax' => 'int',
		'exportable_to_ota' => 'int',
		'sort_order' => 'int',
		'active' => 'int',
		'tariff_category_id' => 'int'
	];

	protected $dates = [
		'valid_from',
		'valid_to'
	];

	protected $fillable = [
		'room_id',
		'based_on_id',
		'year_id',
		'room_category_id',
		'family_for_room_id',
		'view_id',
		'hotel_id',
		'rate_per_id',
		'tariff_type_id',
		'room_code',
		'name',
		'printed_name',
		'can_book_online',
		'adult',
		'child',
		'teen',
		'infant',
		'adult_sharing',
		'child_sharing',
		'teen_sharing',
		'no_available',
		'no_person',
		'no_bedroom',
		'no_bathroom',
		'no_toilets',
		'surface_area',
		'terrace_area',
		'is_for_honeymoon',
		'is_for_family',
		'is_sold_to_mauritian',
		'has_club_access',
		'image_path',
		'video_path',
		'display_ranking',
		'valid_from',
		'valid_to',
		'asterix_id',
		'site_id',
		'qty',
		'cap_rel',
		'cap_adult',
		'cap_child',
		'cap_teen',
		'cap_adult_only',
		'cap_child_age_id',
		'cap_teen_age_id',
		'has_third_person',
		'has_third_person_child',
		'is_family_tariff',
		'display_tariff_as_pax',
		'exportable_to_ota',
		'sort_order',
		'active',
		'tariff_category_id'
	];
}
