<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::all(); // Retrieve all packages from the database
        return view('admin.panel.package.index', compact('packages')); // Return view with packages data
    }

    public function edit(Package $package)
    {
        return view('admin.panel.package.edit', compact('package')); // Return view with package data
    }

    public function create()
    {
        return view('admin.panel.package.create'); // Return view for creating a new package
    }

    public function delete(Package $package)
    {
        $package->delete(); // Delete the package
        return redirect()->route('admin.package.index')->with('success', 'Package deleted successfully'); // Redirect with success message
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $package = new Package();
        $package->fill($request->only(
            'package_code',
            'package_name',
            'description',
            'price',
            'image' )); 

        $package->saveOrFail();

        return redirect()->route('admin.package.index');
    }

    public function update(Request $request, Package $package)
    {

        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $package->fill($request->only(
            'package_code',
            'package_name',
            'description',
            'price' )); 

        if (!blank($request->image)) {
            $package->image = $request->image;
        }
    
        $package->saveOrFail();
        return redirect()->route('admin.package.index')->with('success', 'Package updated successfully'); // Redirect with success message
    }
}
