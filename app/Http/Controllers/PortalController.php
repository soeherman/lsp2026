<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class PortalController extends Controller
{
    public function index(){
        $data = Berita::with('penulis')->get();
        return view('portal', compact('data'));
    }

    public function detailberita($id){
        $d = Berita::with('penulis')->where('id', $id)->first();
        return view('detail', compact('d'));
    }
}
