<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::all(); // Retrieve all activities from the database
        return view('admin.panel.activity.index', compact('activities')); // Return view with activities data
    }

    public function edit(Activity $activity)
    {
        return view('admin.panel.activity.edit', compact('activity')); // Return view with activity data
    }

    public function create()
    {
        return view('admin.panel.activity.create'); // Return view for creating a new activity
    }

    public function delete(Activity $activity)
    {
        $activity->delete(); // Delete the activity
        return redirect()->route('admin.activity.index')->with('success', 'Activity deleted successfully'); // Redirect with success message
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $activity = new Activity();
        $activity->fill($request->only(
            'activity_code',
            'activity_name',
            'description',
            'price',
            'image' )); 

        $activity->saveOrFail();
        return redirect()->route('admin.activity.index');
    }

    public function update(Request $request, Activity $activity)
    {

        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $activity->fill($request->only(
            'activity_code',
            'activity_name',
            'description',
            'price' )); 

        if (!blank($request->image)) {
            $activity->image = $request->image;
        }
    
        $activity->saveOrFail();
        return redirect()->route('admin.activity.index');
    }
}
