<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\User;
use Session;
use Auth;
use DB;

class BookingController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            $booking = Booking::with('user')->get();
            $user = User::all();
            return view('booking.index', compact('booking', 'user'));
        }
        return redirect('/');
    }


    public function store(Request $request)
    {
        $booking = Booking::create($request->all());
        return redirect(route('booking.index'));
    }
}
