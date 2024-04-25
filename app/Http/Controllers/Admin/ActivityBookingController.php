<?php

namespace App\Http\Controllers\Admin;

use App\Enums\BookingStatusEnum;
use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\ActivityBooking;
use Illuminate\Http\Request;

class ActivityBookingController extends Controller
{
    public function index()
    {
        $bookings = ActivityBooking::where('name', 'like', '%'.\request()->get('search').'%')->orderby('id', 'DESC')->paginate(10);
        return view('admin.panel.activity.booking.index', compact('bookings'));
    }

    public function edit(ActivityBooking $booking)
    {
        $activities = Activity::all();
        return view('admin.panel.activity.booking.edit', compact('booking', 'activities'));
    } 

    public function create()
    {
        $activities = Activity::all();
        return view( 'admin.panel.activity.booking.create', compact('activities'));
    }

    public function delete(ActivityBooking $booking)
    {
        $booking->delete();
        return redirect()->route('admin.booking.activity.index')->with('booking deleted successfully');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $booking = new ActivityBooking();
        $booking->fill($request->only(
            'activity_id',
            'name',
            'phone_number',
            'email',
            'date',
            'number_of_people',
            'address,',
            'image',
            'status')); 

        $booking->saveOrFail();

        return redirect()->route('admin.booking.activity.index');
    }

    public function update(Request $request, ActivityBooking $booking)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $booking->fill($request->only(
            'activity_id',
            'name',
            'phone_number',
            'email',
            'date',
            'number_of_people',
            'address',
            'image',
            'status')); 

        if (!blank($request->image)) {
            $booking->image = $request->image;
        }

        $booking->saveOrFail();
        return redirect()->route('admin.booking.activity.index');
    }

    public function viewImage(ActivityBooking $booking)
    {
        $imageUrl = $booking->getImageUrl(); 
        
        return response()->redirectTo($imageUrl);
    }
    
    public function cancel(ActivityBooking $booking)
    {
        $booking->status = BookingStatusEnum::CANCELED;
        $booking->save();
        return redirect()->back()->with('success', 'Booking Canceled');
    }

    public function approve(ActivityBooking $booking)
    {
        $booking->status = BookingStatusEnum::APPROVED;
        $booking->save();
        return redirect()->back()->with('success', 'Booking Approved');
    }

    public function reject(ActivityBooking $booking)
    {
        $booking->status = BookingStatusEnum::REJECTED;
        $booking->save();
        return redirect()->back()->with('success', 'Booking Rejected');
    }
}
