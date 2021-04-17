<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BusinessSetting;
use App\User;
use Session;
use Auth;
use DB;

class BookingController extends Controller
{
    public function index()
    {
        if (Auth::user()->user_type == 'admin' || Auth::user()->user_type == 'staff') {
            return view('booking.index');
        }
        else {
            $booking_activation = BusinessSetting::where('type', 'booking_activation_for_seller')->first();
            if ($booking_activation != null && $booking_activation->value == 1) {
                return view('booking.index');
            }
            else {
                flash(translate('Booking is disable for Sellers!!!'))->error();
                return back();
            }
        }
    }


}
