@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Cast</h2>
    <a href="/cast/create" class="btn btn-primary mb-3">Tambah Cast</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Bio</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($cast as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->umur }}</td>
                    <td>{{ $item->bio }}</td>
                    <td>
                        <form action="/cast/{{ $item->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/cast/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada data cast.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection