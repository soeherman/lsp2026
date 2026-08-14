@extends('index')
@section('konten')
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
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
@endsection