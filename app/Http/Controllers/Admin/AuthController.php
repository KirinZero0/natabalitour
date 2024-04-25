<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('admin.auth.login');
    }

    public function registerForm()
    {
        return view('admin.auth.create');
    }

    public function index()
    {
        $admins = Admin::where('username', 'like', '%'.\request()->get('search').'%')->orderby('id', 'DESC')->paginate(10);
        return view('admin.auth.index', compact( 'admins'));
    }

    public function edit( Admin $admin)
    {
        return view('admin.auth.edit', compact( 'admin'));  
    }

    public function login( Request $request )
    {
        $credentials = $request->only('username', 'password');
        $admin = Admin::where('username', $credentials['username'])->first();
    
        if ($admin && Hash::check($credentials['password'], $admin->password)) {
            Auth::guard('admin')->login($admin);
            return redirect()->route('admin.booking.activity.index');
        } else {
            return redirect()->back()->withErrors(['creds' => 'Invalid username or password']);
        }
    }

    public function register( Request $request )
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255|unique:admins',
            'password' => 'required|string|min:8',
        ]);
    
        Admin::create([
            'username' => $validatedData['username'],
            'password' => Hash::make($validatedData['password']),
        ]);

        return redirect()->route('admin.user.index');
    }

    public function update(Request $request, Admin $admin)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255|unique:admins',
            'password' => 'required|string|min:8',
        ]);

        $admin->update([
            'username' => $validatedData['username'],
            'password' => Hash::make($validatedData['password']),
        ]);

        return redirect()->route('admin.user.index');
    }

    public function delete(Admin $admin)
    {
        $admin->delete();

        return redirect()->route('admin.user.index');
    }

    public function logout()
    {
        Auth::logout(); 
        return redirect()->route('admin.loginForm'); 
    }
}
