@extends('index')
@section('konten')
    <div class="row">
        <div class="col-md-6">
            <h6>Detail Berita</h6>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('berita.index') }}" class="btn btn-secondary mb-3">Kembali</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $berita->judul }}</h5>
            <p class="card-text">{{ $berita->konten }}</p>
            @if ($berita->image)
                <img src="{{ asset('storage/' . $berita->image) }}" alt="Gambar Berita" class="img-fluid">
            @else
                <p>Tidak ada gambar</p>
            @endif
            <p class="card-text"><small class="text-muted">Penulis: {{ $berita->penulis->nama ?? 'Tidak ada penulis' }}</small></p>
        </div>
    </div>
@endsection