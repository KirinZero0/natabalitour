<?php

namespace App\Http\Controllers\Client;

use App\Enums\BookingStatusEnum;
use App\Http\Controllers\Controller;
use App\Mail\Activity\AdminMail as ActivityAdminMail;
use App\Mail\Package\AdminMail;
use App\Models\Activity;
use App\Models\ActivityBooking;
use App\Models\Article;
use App\Models\Package;
use App\Models\PackageBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function index(){
        $articles = Article::latest()->take(3)->get();
        return view('client.index', compact( 'articles'));
    }

    public function articleDetails(Article $article){
        return view('client.articles.index', compact( 'article'));
    }

    public function packageIndex(){
        $packages = Package::all();
        return view( 'client.packages.index', compact( 'packages' ) );
    }

    public function activityIndex(){
        $activities = Activity::all();
        return view( 'client.activities.index', compact( 'activities' ) );
    }

    public function packageDetails( Package $package ){
        return view( 'client.packages.details', compact( 'package' ) );
    }

    public function activityDetails( Activity  $activity ){
        return view( 'client.activities.details', compact( 'activity' ) );
    }

    public function bookPackage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $booking = new PackageBooking();
        $booking->fill([
            'package_id' => $request->package_id,
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'date' => $request->date,
            'number_of_people' => $request->number_of_people,
            'address' => $request->address,
            'image' => $request->image,
            'status' => BookingStatusEnum::PENDING 
        ]); 

        $booking->saveOrFail();

        Mail::to(env('ADMIN_MAIL'))->send(new AdminMail($booking));

        return redirect()->back();
    }

    public function bookActivity(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $booking = new ActivityBooking();
        $booking->fill([
            'activity_id' => $request->activity_id,
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'date' => $request->date,
            'number_of_people' => $request->number_of_people,
            'address' => $request->address,
            'image' => $request->image,
            'status' => BookingStatusEnum::PENDING 
        ]); 

        $booking->saveOrFail();

        Mail::to(env('ADMIN_MAIL'))->send(new ActivityAdminMail($booking));

        return redirect()->back();
    }

}
