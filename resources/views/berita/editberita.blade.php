@extends('index')
@section('konten')
<form action="{{ route('berita.update', $berita->id) }}" method="POST">
    <div class="card">
        <div class="card-header">
            <h5>Tambah Berita</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" name="judul" class="form-control" value="{{ $berita->judul }}">
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar" class="form-control">
                            @if ($berita->image)
                                <img src="{{ asset('storage/' . $berita->image) }}" alt="Gambar Berita" width="100" class="mt-2">
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Konten</label>
                            <textarea name="konten" class="form-control">{{ $berita->konten }}</textarea>
                        </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            <a href="{{ route('berita.index') }}" class="btn btn-outline-secondary mt-3">Kembali</a>
        </div>
    </div>
</form>
@endsection