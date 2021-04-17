<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Banner
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $booking_time
 * @property string|null $booking_day
 * @property string|null $booking_note
 * @property string|null $booking_status
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @mixin \Eloquent
 */

class Booking extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'booking_time', 'booking_day', 'booking_note', 'booking_status', 'user_id'
    ];
}
