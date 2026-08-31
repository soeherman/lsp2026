@extends('index')
@section('konten')
    <div class="row">
        <h3>Berita Terkini</h3>
        <hr>
        @foreach ($data as $d)
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h6>{{ $d->judul }}</h6>
                </div>
                <div class="card-body">
                    <img src="{{ asset('storage/' . $d->image) }}" alt="Gambar Berita" width="100" height="100">
                    <p>
                        {{ Str::limit($d->konten, 100, '...') }}
                    </p>
                    <a href="{{ route('berita.detail', $d->id) }}">Selengkapnya</a>
                </div>
                <div class="card-footer">
                    <small>
                        Penulis : {{ $d->penulis->nama }}
                    </small>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection