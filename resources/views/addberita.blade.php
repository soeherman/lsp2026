@extends('index')
@section('konten')
    <div class="card">
        <div class="card-header">
            <h5>Tambah Berita</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" name="judul" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Penulis</label>
                            <select name="penulis" class="form-control">
                                <option value="">Pilih Penulis</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Konten</label>
                            <textarea name="isi" class="form-control"></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            <a href="" class="btn btn-outline-secondary mt-3">Kembali</a>
        </div>
    </div>
@endsection