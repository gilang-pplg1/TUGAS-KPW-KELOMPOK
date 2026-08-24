@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Role</h2>
    <a href="/role/create" class="btn btn-primary mb-3">Tambah Role</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($roles as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>
                        <form action="/role/{{ $item->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">Belum ada data role.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection