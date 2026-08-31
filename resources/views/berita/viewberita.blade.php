@extends('index')
@section('konten')
    {{-- Optional untuk menampilkan pesan --}}
    @if (session('success'))
        <div class="alert alert-success mt-4">
            {{ session('success') }}
        </div>
    @endif
    {{-- Akhir optional --}}
    <div class="row">
        <div class="col-md-6">
            <h6>Daftar Berita</h6>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('berita.create') }}" class="btn btn-primary mb-3">Tambah Berita</a>
        </div>
    </div>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Penulis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($beritas as $index => $berita)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $berita->judul }}</td>
                    <td>
                        @if ($berita->image)
                            <img src="{{ asset('storage/' . $berita->image) }}" alt="Gambar Berita" width="100">
                        @else
                            Tidak ada gambar
                        @endif
                    </td>
                    <td>{{ $berita->penulis->nama ?? 'Tidak ada penulis' }}</td>
                    <td>
                        <a href="{{ route('berita.show', $berita->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada berita.</td>
                </tr>
            @endforelse
        </tbody>
    </table>   
@endsection