@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Detail Genre: {{ $genre->nama }}</h2>
    <hr>
    <h4>Daftar Film dengan Genre Ini:</h4>
    <ul>
        @forelse($genre->film as $film)
            <li>{{ $film->judul }} ({{ $film->tahun }})</li>
        @empty
            <li>Belum ada film dalam genre ini.</li>
        @endforelse
    </ul>
    <a href="{{ route('genre.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection