<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = User::where('username', $request->username)->get();
        if (count($data) === 0) {
            User::create([
                "username" => $request->username,
                "password" => bcrypt($request->password),
                "nama_pengguna" => $request->nama_pengguna,
                "email" => $request->email,
                "no_telp" => $request->no_telp,
                "phone_id" => ''
            ]);
            return response()->json(["status" => "berhasil", "pesan" => "Pengguna berhasil dibuat"]);
        } else {
            return response()->json(["status" => "gagal", "pesan" => "Pengguna gagal dibuat, silakan coba lagi!"]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
