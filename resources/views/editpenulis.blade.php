@extends('index')
@section('konten')
    <div class="card">
        <div class="card-header">
            <h5>Tambah Penulis</h5>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
            </form>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            <a href="{{ route('penulis.index') }}" class="btn btn-outline-secondary mt-3">Kembali</a>
        </div>
    </div>
@endsection