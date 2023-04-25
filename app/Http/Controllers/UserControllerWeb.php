<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserControllerWeb extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('modules.customer.index', ['users' => $users]);
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
        //
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
        $user = User::where('id', $id)->first();
        return view('modules.customer.action.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'usernameHidden' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required',
        ]);
        // $productGet =  User::where('id', $id)->first();
        // Storage::delete('public/images/' . $productGet->photo);
        // $photoName = $request->photo->getClientOriginalName();
        // $photoPath = $request->photo->storeAs('public/images', $photoName);
        if ($request->newPassword == null) {
            User::where('id', $id)->update([
                'username' => $request->usernameHidden,
                'nama_pengguna' => $request->name,
                'email' => $request->email,
                'no_telp' => $request->phoneNumber,
            ]);
        } else {
            User::where('id', $id)->update([
                'username' => $request->usernameHidden,
                'password' => bcrypt($request->newPassword),
                'nama_pengguna' => $request->name,
                'email' => $request->email,
                'no_telp' => $request->phoneNumber,
            ]);
        }
        return redirect()->route('customer.index')->with('success', 'Data successfully changed!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user =  User::where('id', $id);
        $userGet =  $user->first();
        // Storage::delete('public/images/' . $userGet->foto);
        $userDelete = $user->delete();
        return redirect('customer')->with('success', 'Data successfully deleted!');
        //
    }
}
