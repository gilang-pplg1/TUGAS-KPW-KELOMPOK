@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Peran Baru</h2>
    <form action="/peran" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label>Film</label>
            <select name="film_id" class="form-control" required>
                <option value="">-- Pilih Film --</option>
                @foreach ($film as $f)
                    <option value="{{ $f->id }}">{{ $f->judul }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label>Cast (Aktor)</label>
            <select name="cast_id" class="form-control" required>
                <option value="">-- Pilih Cast --</option>
                @foreach ($cast as $c)
                    <option value="{{ $c->id }}">{{ $c->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label>Nama Peran dalam Film</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/peran" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection