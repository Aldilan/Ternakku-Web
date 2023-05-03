<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;

class CartsControllerApi extends Controller
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
        $user = User::where('phone_id', $request->phone_id)->first();
        $cartFound = Cart::where('user_id', $user['id'])->where('product_id', $request->product_id)->first();
        if ($cartFound != null) {
            $quantityNow = intval($cartFound->quantity) + intval($request->quantity);
            Cart::where('id', $cartFound->id)->update([
                'quantity' => $quantityNow

            ]);
        } else {
            Cart::create([
                'user_id' => $user['id'],
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
            ]);
        }
        return response()->json(["status" => "berhasil", "pesan" => "Pengguna berhasil dibuat"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $foundUser = User::where('phone_id', intval($id))->first();
        $datas = Cart::where('user_id', $foundUser->id)->get();
        return response()->json(["status" => "berhasil", "pesan" => "Pengguna berhasil dibuat", "data" => $datas]);
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
