@extends('layouts.app') {{-- sesuaikan dengan layout utama Anda --}}

@section('content')
<div class="container mt-4">
    <h2>Daftar Genre</h2>
    <a href="{{ route('genre.create') }}" class="btn btn-primary mb-3">Tambah Genre</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Genre</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($genre as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>
                        <form action="{{ route('genre.destroy', $item->id) }}" method="POST">
                            <a href="{{ route('genre.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('genre.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus genre ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">Belum ada data genre.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection