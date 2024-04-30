<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;
class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function ChangePassword()
    {
        return view('admin.change_password');
    }
    public function profile()
    {
        return view('admin.profile');
    }
    public function updatePassword(Request $request)
    {
        $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->currentPassword, $user->password)) {
            return redirect()->back()->with('error', 'The current password is incorrect.');
        }

        $user->password = Hash::make($request->newPassword);
        $user->save();

        return redirect()->back()->with('success', 'Password updated successfully.');
    }
}