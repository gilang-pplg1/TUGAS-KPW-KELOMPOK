@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Peran Film</h2>
    <a href="/peran/create" class="btn btn-primary mb-3">Tambah Peran</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Film</th>
                <th>Nama Cast</th>
                <th>Nama Peran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($peran as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->film ? $item->film->judul : '-' }}</td>
                    <td>{{ $item->cast ? $item->cast->nama : '-' }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>
                        <form action="/peran/{{ $item->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada data peran.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection