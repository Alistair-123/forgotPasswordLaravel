<?php

namespace App\Http\Controllers;

use App\Mail\ResetPasswordMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function forgotPassword(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('forgot-password.index');
        }

        $request->validate(['email' => 'required|email|exists:users,email']);

        $token = Password::getRepository()->create(User::where('email', $request->email)->first());

        Mail::to($request->email)->send(new ResetPasswordMail($token));

        return back()->with('status', 'Password reset link sent!');
    }

    public function showResetForm($token)
    {
        return view('forgot-password.reset', ['token' => $token]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user) return back()->withErrors(['email' => 'Invalid email address.']);

        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Password reset successfully! You can now log in.');
    }
}
