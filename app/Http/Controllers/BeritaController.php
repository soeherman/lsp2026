<?php

namespace App\Http\Controllers;

// Masukkan use statement ini di bagian atas file BeritaController.php
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
// Pengunaan model
use App\Models\Berita;
use App\Models\Kategori;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beritas = Berita::with('penulis', 'kategori')->get();
        return view('berita/viewberita', compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('berita/addberita', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Antisipasi soal minta validasi
        $valid = Validator::make($request->all(), [
            'judul' => 'required',
            'konten' => 'required',
            'gambar' => 'required',
        ]);

        if($valid->fails()) {
            return redirect()->back()->withErrors($valid)->withInput();
        }
        // Akhir Antisipasi

        $b = new Berita();
        $b->judul = $request->input('judul');
        $b->konten = $request->input('konten');
        $b->tanggal = date('Y-m-d'); // Set tanggal to the current date
        $b->penulis_id = session('penulis_id'); 
        $b->kategori_id = $request->input('kategori_id');

        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('images', 'public');
            $b->image = $imagePath;
        }

        $b->save();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan.');
        // Solusi tanpa pesan
        // return redirect()->route('berita.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita/showberita', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $berita = Berita::findOrFail($id);
        $kategoris = Kategori::all();
        return view('berita/editberita', compact('berita', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Antisipasi soal minta validasi
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // Akhir Antisipasi

        $berita = Berita::findOrFail($id);
        $berita->judul = $request->input('judul');
        $berita->konten = $request->input('konten');
        $berita->tanggal = date('Y-m-d'); // Set tanggal to the current date
        $berita->penulis_id = 1;
        $berita->kategori_id = $request->input('kategori_id');

        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('images', 'public');
            $berita->image = $imagePath;
        }else {
            // Jika tidak ada file gambar yang diunggah, tetap gunakan gambar lama
            $berita->image = $berita->image;
        }

        $berita->save();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus.');
    }
}
