<?php

namespace App\Http\Controllers;

use App\Models\Peran;
use App\Models\Film;
use App\Models\Cast;
use Illuminate\Http\Request;

class PeranController extends Controller
{
    public function index()
    {
        $peran = Peran::with(['film', 'cast'])->get();
        return view('peran.index', compact('peran'));
    }

    public function create()
    {
        $film = Film::all();
        $cast = Cast::all();
        return view('peran.create', compact('film', 'cast'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'film_id' => 'required',
            'cast_id' => 'required',
            'nama'    => 'required|max:45',
        ]);

        Peran::create($request->all());

        return redirect('/peran');
    }

    public function destroy(string $id)
    {
        Peran::findOrFail($id)->delete();
        return redirect('/peran');
    }
}