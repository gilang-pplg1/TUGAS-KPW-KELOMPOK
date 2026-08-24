<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('role.index', compact('roles'));
    }

    public function create()
    {
        return view('role.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:10',
        ]);

        Role::create([
            'nama' => $request->nama
        ]);

        return redirect('/role');
    }

    public function destroy(string $id)
    {
        Role::findOrFail($id)->delete();
        return redirect('/role');
    }
}