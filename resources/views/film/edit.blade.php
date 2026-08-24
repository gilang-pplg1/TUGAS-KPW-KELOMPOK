@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Film</h2>
    <form action="/film/{{ $film->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label>Judul Film</label>
            <input type="text" name="judul" class="form-control" value="{{ $film->judul }}" required>
        </div>
        <div class="form-group mb-3">
            <label>Ringkasan</label>
            <textarea name="ringkasan" class="form-control" rows="3" required>{{ $film->ringkasan }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label>Tahun</label>
            <input type="number" name="tahun" class="form-control" value="{{ $film->tahun }}" required>
        </div>
        <div class="form-group mb-3">
            <label>Poster</label>
            <input type="text" name="poster" class="form-control" value="{{ $film->poster }}" required>
        </div>
        <div class="form-group mb-3">
            <label>Genre</label>
            <select name="genre_id" class="form-control" required>
                @foreach ($genre as $g)
                    <option value="{{ $g->id }}" {{ $g->id == $film->genre_id ? 'selected' : '' }}>
                        {{ $g->nama }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
        <a href="/film" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection