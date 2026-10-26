<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::all();

        return view('listguru', compact('guru'));
    }

    public function create()
    {
        return view('pageinputguru');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:255|unique:gurus,nip',
            'mapel' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);

        Guru::create($request->all());

        return redirect()->route('guru.index')->with('success', 'Data guru berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->delete();

        return redirect()->route('guru.index')->with('success', 'Data guru berhasil dihapus.');
    }

    public function show($id)
    {
        $guru = Guru::findOrFail($id);
        return view('pagedetailguru', compact('guru'));
    }

        // Menampilkan form edit guru
    public function edit($id)
    {
        $guru = Guru::findOrFail($id);

        return view('editguru', compact('guru'));
    }

    // Menyimpan perubahan data guru
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'nip' => 'required|string|max:30',
            'mapel' => 'required|string|max:100',
            'alamat' => 'required|string|max:255',
        ]);

        $guru = Guru::findOrFail($id);

        $guru->nama = $validated['nama'];
        $guru->nip = $validated['nip'];
        $guru->mapel = $validated['mapel'];
        $guru->alamat = $validated['alamat'];

        $guru->save();

        return redirect()
            ->route('guru.index')
            ->with('success', 'Data guru berhasil diperbarui!');
    }
    }