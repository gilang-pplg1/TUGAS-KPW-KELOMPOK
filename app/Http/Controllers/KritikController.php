<?php

namespace App\Http\Controllers;

use App\Models\Kritik;
use App\Models\Film;
use Illuminate\Http\Request;

class KritikController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'film_id' => 'required',
            'content' => 'required',
            'point'   => 'required|numeric|min:1|max:5',
        ]);

        Kritik::create([
            'user_id' => auth()->id() ?? 1, // default ke ID 1 jika belum pakai auth
            'film_id' => $request->film_id,
            'content' => $request->content,
            'point'   => $request->point,
        ]);

        return back();
    }
}