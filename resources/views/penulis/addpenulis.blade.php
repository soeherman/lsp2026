@extends('index')
@section('konten')
<form action="{{ route('penulis.store') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-header">
            <h5>Tambah Penulis</h5>
        </div>
        <div class="card-body">
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
                <div class="form-group">
                    <label>Role</label>
                    <select name="role" class="form-control">
                        <option value="1">Admin</option>
                        <option value="0">Penulis</option>
                    </select>
                </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            <a href="{{ route('penulis.index') }}" class="btn btn-outline-secondary mt-3">Kembali</a>
        </div>
    </div>
</form>
@endsection