<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genre = Genre::all();
        return view('genre.index', compact('genre'));
    }

    public function create()
    {
        return view('genre.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        // SUDAH DIPERBAIKI: Menggunakan 'nama'
        Genre::create([
            'nama' => $request->nama,
        ]);

        return redirect('/genre');
    }

    public function show(string $id)
    {
        $genre = Genre::with('film')->findOrFail($id);
        return view('genre.show', compact('genre'));
    }

    public function edit(string $id)
    {
        $genre = Genre::findOrFail($id);
        return view('genre.edit', compact('genre'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|max:45',
        ]);

        $genre = Genre::findOrFail($id);
        $genre->update([
            'nama' => $request->nama,
        ]);

        return redirect()->route('genre.index')->with('success', 'Genre berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        $genre = Genre::findOrFail($id);
        $genre->delete();

        return redirect()->route('genre.index')->with('success', 'Genre berhasil dihapus!');
    }
}