<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Genre;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $film = Film::with('genre')->get();
        return view('film.index', compact('film'));
    }

    public function create()
    {
        $genre = Genre::all();
        return view('film.create', compact('genre'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'     => 'required',
            'ringkasan' => 'required',
            'tahun'     => 'required|numeric',
            'poster'    => 'required',
            'genre_id'  => 'required',
        ]);

        Film::create([
            'judul'     => $request->judul,
            'ringkasan' => $request->ringkasan,
            'tahun'     => $request->tahun,
            'poster'    => $request->poster,
            'genre_id'  => $request->genre_id,
        ]);

        return redirect('/film');
    }

    public function edit(string $id)
    {
        $film = Film::findOrFail($id);
        $genre = Genre::all();
        return view('film.edit', compact('film', 'genre'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul'     => 'required',
            'ringkasan' => 'required',
            'tahun'     => 'required|numeric',
            'poster'    => 'required',
            'genre_id'  => 'required',
        ]);

        $film = Film::findOrFail($id);
        $film->update([
            'judul'     => $request->judul,
            'ringkasan' => $request->ringkasan,
            'tahun'     => $request->tahun,
            'poster'    => $request->poster,
            'genre_id'  => $request->genre_id,
        ]);

        return redirect('/film');
    }

    public function destroy(string $id)
    {
        $film = Film::findOrFail($id);
        $film->delete();

        return redirect('/film');
    }
}