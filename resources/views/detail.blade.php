@extends('index')
@section('konten')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>{{ $d->judul }}</h4>
                </div>
                <div class="card-body">
                     <img src="{{ asset('storage/' . $d->image) }}" alt="Gambar Berita" width="100" height="100">
                     <p>
                        {{ $d->konten }}
                     </p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('berita.portal') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection