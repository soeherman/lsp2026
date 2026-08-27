@extends('index')
@section('konten')
<form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
            <h5>Tambah Berita</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                        @csrf
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" name="judul" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Konten</label>
                            <textarea name="konten" class="form-control"></textarea>
                        </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            <a href="{{ route('berita.index') }}" class="btn btn-outline-secondary mt-3">Kembali</a>
        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger mt-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</form>
@endsection