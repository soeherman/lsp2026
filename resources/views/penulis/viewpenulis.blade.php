@extends('index')
@section('konten')
    @if (session('success'))
        <div class="alert alert-success mt-4">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <h6>Daftar Penulis</h6>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('penulis.create') }}" class="btn btn-primary mb-3">Tambah Penulis</a>
        </div>
    </div>
    <table class="table table-condensed">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($penulises as $index => $penulis)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $penulis->nama }}</td>
                    <td>{{ $penulis->email }}</td>
                    <td>{{ $penulis->role }}</td>
                    <td>
                        <a href="{{ route('penulis.show', $penulis->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('penulis.edit', $penulis->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('penulis.destroy', $penulis->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus penulis ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada penulis.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection