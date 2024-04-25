<?php

namespace App\Http\Controllers\Admin;

use App\Enums\BookingStatusEnum;
use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\PackageBooking;
use Illuminate\Http\Request;

class PackageBookingController extends Controller
{
    public function index()
    {
        $bookings = PackageBooking::where('name', 'like', '%'.\request()->get('search').'%')->orderby('id', 'DESC')->paginate(10);
        return view('admin.panel.package.booking.index', compact('bookings'));
    }

    public function edit(PackageBooking $booking)
    {
        $packages = Package::all();
        return view('admin.panel.package.booking.edit', compact('booking', 'packages'));
    } 

    public function create()
    {
        $packages = Package::all();
        return view( 'admin.panel.package.booking.create', compact('packages'));
    }

    public function delete(PackageBooking $booking)
    {
        $booking->delete();
        return redirect()->route('admin.booking.package.index')->with('booking deleted successfully');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $booking = new PackageBooking();
        $booking->fill($request->only(
            'package_id',
            'name',
            'phone_number',
            'email',
            'date',
            'number_of_people',
            'address',
            'image',
            'status')); 

        $booking->saveOrFail();

        return redirect()->route('admin.booking.package.index');
    }

    public function update(Request $request, PackageBooking $booking)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $booking->fill($request->only(
            'package_id',
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
        return redirect()->route('admin.booking.package.index');
    }

    public function viewImage(PackageBooking $booking)
    {
        $imageUrl = $booking->getImageUrl(); 
        
        return response()->redirectTo($imageUrl);
    }
    
    public function cancel(PackageBooking $booking)
    {
        $booking->status = BookingStatusEnum::CANCELED;
        $booking->save();
        return redirect()->back()->with('success', 'Booking Canceled');
    }

    public function approve(PackageBooking $booking)
    {
        $booking->status = BookingStatusEnum::APPROVED;
        $booking->save();
        return redirect()->back()->with('success', 'Booking Approved');
    }

    public function reject(PackageBooking $booking)
    {
        $booking->status = BookingStatusEnum::REJECTED;
        $booking->save();
        return redirect()->back()->with('success', 'Booking Rejected');
    }

    
}
