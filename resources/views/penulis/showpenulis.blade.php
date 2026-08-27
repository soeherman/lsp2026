@extends('index')
@section('konten')
    <div class="row">
        <div class="col-md-6">
            <h6>Detail Penulis </h6>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('penulis.index') }}" class="btn btn-secondary mb-3">Kembali</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nama: {{ $penulis->nama }}</h5>
            <p class="card-text">Email: {{ $penulis->email }}</p>
            <p class="card-text">Role: {{ $penulis->role == 1 ? 'Admin' : 'Penulis' }}</p>
        </div>
    </div>
@endsection