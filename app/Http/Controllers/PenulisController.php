<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Penulis;

class PenulisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penulises = Penulis::all();
        return view('penulis/viewpenulis', compact('penulises'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penulis/addpenulis');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'nama' => 'required',
            'email' => 'required|email|unique:penulis,email',
            'password' => 'required',
            'role' => 'required',
        ]);

        if($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData)->withInput();
        }

        $penulis = new Penulis();
        $penulis->nama = $request->input('nama');
        $penulis->email = $request->input('email');
        $penulis->password = bcrypt($request->input('password')); // Hash the password
        $penulis->role = $request->input('role');
        $penulis->save();
        return redirect()->route('penulis.index')->with('success', 'Penulis berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penulis = Penulis::findOrFail($id);
        return view('penulis/showpenulis', compact('penulis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $penulis = Penulis::findOrFail($id);
        return view('penulis/editpenulis', compact('penulis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = Validator::make($request->all(), [
            'nama' => 'required',
            'email' => 'required|email|unique:penulis,email,' . $id,
            'password' => 'nullable|min:6',
            'role' => 'required',
        ]);

        if($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData)->withInput();
        }

        $penulis = Penulis::findOrFail($id);
        $penulis->nama = $request->input('nama');
        $penulis->email = $request->input('email');
        if ($request->filled('password')) {
            $penulis->password = bcrypt($request->input('password')); // Hash the password
        }
        $penulis->role = $request->input('role');
        $penulis->save();
        return redirect()->route('penulis.index')->with('success', 'Penulis berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penulis = Penulis::findOrFail($id);
        $penulis->delete();
        return redirect()->route('penulis.index')->with('success', 'Penulis berhasil dihapus.');
    }
}
