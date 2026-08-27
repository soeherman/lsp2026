@extends('index')
@section('konten')
<form action="{{ route('penulis.update', $penulis->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="card">
        <div class="card-header">
            <h5>Edit Penulis</h5>
        </div>
        <div class="card-body">
            <input type="hidden" name="id" value="{{ $penulis->id }}">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $penulis->nama }}">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $penulis->email }}">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <select name="role" class="form-control">
                        <option value="1" {{ $penulis->role == 1 ? 'selected' : '' }}>Admin</option>
                        <option value="0" {{ $penulis->role == 0 ? 'selected' : '' }}>Penulis</option>
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