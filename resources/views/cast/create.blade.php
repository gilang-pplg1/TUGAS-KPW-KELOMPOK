@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Cast Baru</h2>
    
    <form action="/cast" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="nama">Nama Cast</label>
            <input type="text" name="nama" class="form-control" id="nama" required>
        </div>

        <div class="form-group mb-3">
            <label for="umur">Umur</label>
            <input type="number" name="umur" class="form-control" id="umur" required>
        </div>

        <div class="form-group mb-3">
            <label for="bio">Bio</label>
            <textarea name="bio" class="form-control" id="bio" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/cast" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection