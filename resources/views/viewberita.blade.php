@extends('index')
@section('konten')
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
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>   
@endsection