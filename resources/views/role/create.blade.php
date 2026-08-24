@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Role Baru</h2>
    <form action="/role" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label>Nama Role (Maks 10 karakter)</label>
            <input type="text" name="nama" class="form-control" maxlength="10" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/role" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection