<?php

namespace App\Models;

use App\User;
use Eloquent;
//use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Banner
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $booking_time
 * @property string|null $booking_day
 * @property string|null $booking_note
 * @property string|null $booking_status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @mixin Eloquent
 */
class Booking extends Model
{
    public $table = 'bookings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'booking_time', 'booking_day', 'booking_note', 'booking_status', 'user_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
