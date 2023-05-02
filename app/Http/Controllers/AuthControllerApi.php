<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthControllerApi extends Controller
{
    public function ValidateUser(Request $request)
    {
        $foundUser = User::where('phone_id', $request->phone_id)->first();
        if ($foundUser != null) {
            return response()->json(["status" => "berhasil", "pesan" => "Berhasil validasi"]);
        }
        return response()->json(["status" => "gagal", "pesan" => "Gagal masuk, silakan coba lagi!"]);
    }

    public function LogoutUser(Request $request)
    {
        $foundUser = User::where('phone_id', $request->phone_id)->first();
        if ($foundUser != null) {
            User::where('id', $foundUser->id)->update([
                'phone_id' => ''
            ]);
        }
        return response()->json(["status" => "berhasil", "pesan" => "Berhasil keluar"]);
    }

    public function LoginUser(Request $request)
    {
        if (Auth::guest()) {
            $foundUser  = User::where('username', $request->username)->first();
            if ($foundUser != null) {
                $hashing = Hash::check($request->password, $foundUser->password);
                if ($hashing) {
                    User::where('id', $foundUser->id)->update([
                        'phone_id' => $request->phone_id
                    ]);
                    if (Auth::attempt(["username" => $request->username, "password" => $request->password])) {
                        return response()->json(["status" => "berhasil", "pesan" => "Berhasil masuk"]);
                    }
                }
            }
        }
        return response()->json(["status" => "gagal", "pesan" => "Gagal masuk, silakan coba lagi!"]);
    }
}
