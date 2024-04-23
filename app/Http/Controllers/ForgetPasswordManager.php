<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Routing\Controller;

class ForgetPasswordManager extends Controller
{
    function forgetPassword() {
        return view("forget-password");
    }

    function forgetPasswordPost(Request $request) {
        $request->validate([
            'email' => "required|email|exists:users", // Corrected typo here
        ]);

        $token = Str::random(64);

        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send("emails.forget-password", ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject("Reset Password");
        });

        return redirect()->to(route("forget.password"))->with("success", "We have sent an email to reset your password.");
    }

    function resetPassword($token) {
        return view("new-password", compact('token'));
    }

    function resetPasswordPost(Request $request) {
        $request->validate([
            "email" => "required|email|exists:users", // Corrected typo here
            "password" => "required|string|min:6|confirmed",
            "password_confirmation" => "required"
        ]);

        $updatePassword = DB::table('password_reset_tokens')
            ->where([
                "email" => $request->email,
                "token" => $request->token,
            ])->first();

        if (!$updatePassword) {
            return redirect()->to(route("reset.password"))->with("error", "invalid");
        }

        User::where("email", $request->email)
            ->update(["password" => Hash::make($request->password)]);

        DB::table("password_reset_tokens")->where(["email" => $request->email])->delete();

        return redirect()->to(route("login"))->with("success", "Password reset successful!"); // Improved success message
    }
}
