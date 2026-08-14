@extends('index')
@section('konten')
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
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection