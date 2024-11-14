<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pendaftaran;
use App\Models\Kelompok;
use Illuminate\Http\Request;


class PendaftaranController extends Controller
{
    public function create()
    {
        return view('unit.pendaftaran2');
    }

    public function store(Request $request)
    {
        // Validasi inputan
        $validated = $request->validate([
            'pabrik' => 'required',
            'unit' => 'required',
            'nama_kelompok' => 'required',
            'ketua_kelompok' => 'required',
            'fasilitator' => 'required',
            'jenis_group' => 'required',
            'perihal' => 'required',
            'tanggal' => 'required|date',
            'judul' => 'required',
        ]);

        // Menyimpan data pendaftaran
        $pendaftaran = new Pendaftaran();
        $pendaftaran->pabrik = $request->pabrik;
        $pendaftaran->unit = $request->unit;
        $pendaftaran->nama_kelompok = $request->nama_kelompok;
        $pendaftaran->ketua_kelompok = $request->ketua_kelompok;
        $pendaftaran->fasilitator = $request->fasilitator;
        $pendaftaran->jenis_group = $request->jenis_group;
        $pendaftaran->perihal = $request->perihal;
        $pendaftaran->tanggal = $request->tanggal;
        $pendaftaran->judul = $request->judul;
        $pendaftaran->tema = $request->tema;
        $pendaftaran->nomor_tema = $request->nomor_tema;
        $pendaftaran->save();

        // Menyimpan anggota kelompok
        foreach ($request->jabatan_kelompok as $key => $jabatan) {
            $kelompok = new Kelompok();
            $kelompok->pendaftaran_id = $pendaftaran->id;
            $kelompok->jabatan = $jabatan;
            $kelompok->pernr = $request->pernr[$key];
            $kelompok->nama = $request->nama[$key];
            if ($request->hasFile('foto')) {
                $foto = $request->file('foto')[$key];
                $path = $foto->store('photos', 'public');
                $kelompok->foto = $path;
            }
            $kelompok->save();
        }

        return redirect()->route('pendaftaran2.index')->with('success', 'Pendaftaran berhasil!');
    }
}
