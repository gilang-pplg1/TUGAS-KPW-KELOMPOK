<?php

namespace App\Http\Controllers;

use App\Models\Cast; // Wajib diimpor agar tidak error "not found"
use Illuminate\Http\Request;

class CastController extends Controller
{
    public function index()
    {
        $cast = Cast::all();
        return view('cast.index', compact('cast'));
    }

    public function create()
    {
        return view('cast.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|numeric',
            'bio'  => 'required',
        ]);

        Cast::create([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'bio'  => $request->bio,
        ]);

        return redirect('/cast');
    }

    public function show(string $id)
    {
        $cast = Cast::findOrFail($id);
        return view('cast.show', compact('cast'));
    }

    public function edit(string $id)
    {
        $cast = Cast::findOrFail($id);
        return view('cast.edit', compact('cast'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|numeric',
            'bio'  => 'required',
        ]);

        $cast = Cast::findOrFail($id);
        $cast->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'bio'  => $request->bio,
        ]);

        return redirect('/cast');
    }

    public function destroy(string $id)
    {
        $cast = Cast::findOrFail($id);
        $cast->delete();

        return redirect('/cast');
    }
}