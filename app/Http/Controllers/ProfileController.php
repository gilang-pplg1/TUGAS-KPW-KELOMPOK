<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(string $userId)
    {
        $user = User::with('profile')->findOrFail($userId);
        return view('profile.show', compact('user'));
    }

    public function update(Request $request, string $userId)
    {
        $request->validate([
            'umur'   => 'required|numeric',
            'bio'    => 'required',
            'alamat' => 'required',
        ]);

        Profile::updateOrCreate(
            ['user_id' => $userId],
            [
                'umur'   => $request->umur,
                'bio'    => $request->bio,
                'alamat' => $request->alamat,
            ]
        );

        return back();
    }
}