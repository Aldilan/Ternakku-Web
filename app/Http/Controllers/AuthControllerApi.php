<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthControllerApi extends Controller
{
    public function ValidateUser()
    {
        if (Auth::user()) {
            return response()->json(["status" => "berhasil", "pesan" => "Sudah masuk"]);
        } else {
            return response()->json(["status" => "gagal", "pesan" => "Belum masuk"]);
        }
    }
    public function LoginUser(Request $request)
    {
        if (Auth::guest()) {
            $foundUser  = User::where('username', $request->username)->first();
            if ($foundUser != null) {
                $hashing = Hash::check($request->password, $foundUser->password);
                if ($hashing) {
                    if (Auth::attempt(["username" => $request->username, "password" => $request->password])) {
                        return response()->json(["status" => "berhasil", "pesan" => "Berhasil masuk"]);
                    }
                }
            }
        }
        return response()->json(["status" => "gagal", "pesan" => "Gagal masuk, silakan coba lagi!"]);
    }
}
