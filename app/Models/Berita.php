<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

     protected $fillable = ['judul','konten','tanggal','image','penulis_id','kategori_id'];

    public function penulis()
    {
        return $this->belongsTo(Penulis::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
