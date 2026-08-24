@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Cast</h2>
    <form action="/cast/{{ $cast->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label>Nama Cast</label>
            <input type="text" name="nama" class="form-control" value="{{ $cast->nama }}" required>
        </div>
        <div class="form-group mb-3">
            <label>Umur</label>
            <input type="number" name="umur" class="form-control" value="{{ $cast->umur }}" required>
        </div>
        <div class="form-group mb-3">
            <label>Bio</label>
            <textarea name="bio" class="form-control" rows="4" required>{{ $cast->bio }}</textarea>
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
        <a href="/cast" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection