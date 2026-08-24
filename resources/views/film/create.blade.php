@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Film Baru</h2>
    <form action="/film" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label>Judul Film</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label>Ringkasan</label>
            <textarea name="ringkasan" class="form-control" rows="3" required></textarea>
        </div>
        <div class="form-group mb-3">
            <label>Tahun</label>
            <input type="number" name="tahun" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label>Poster (URL/Nama File)</label>
            <input type="text" name="poster" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label>Genre</label>
            <select name="genre_id" class="form-control" required>
                <option value="">-- Pilih Genre --</option>
                @foreach ($genre as $g)
                    <option value="{{ $g->id }}">{{ $g->nama }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/film" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection