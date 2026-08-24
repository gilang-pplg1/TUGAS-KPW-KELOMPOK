@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Tambah Genre Baru</h2>
    <form action="{{ route('genre.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Genre</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('genre.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection