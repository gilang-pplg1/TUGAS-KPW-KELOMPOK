@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Film</h2>
    <a href="/film/create" class="btn btn-primary mb-3">Tambah Film</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Tahun</th>
                <th>Genre</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($film as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->tahun }}</td>
                    <td>{{ $item->genre ? $item->genre->nama : '-' }}</td>
                    <td>
                        <form action="/film/{{ $item->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/film/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada data film.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection