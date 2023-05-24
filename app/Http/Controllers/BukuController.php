<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    //
    public function index()
    {
        // $bukus = Buku::all();
        // $kategoris = Kategori::all(); 
        $bukus = Buku::join('kategori', 'buku.id_kategori', '=', 'kategori.id')
            ->select('buku.*', 'kategori.nama_kategori')
            ->get();
        $active = 'buku';
        // return view('buku.show', compact('bukus','kategoris', 'active'));
        return view('buku.show', compact('bukus', 'active'));
    }

    public function tambah()
    {
        $active = 'buku';
        $kategoris = Kategori::all(); // Ambil semua kategori
        return view('buku.tambah', compact('active', 'kategoris')); // Sertakan variabel $kategoris
    }

    public function tambahAksi(Request $request)
    {
        $input = $request->all();

        $insert = Buku::create($input);

        if ($insert) {
            return redirect('buku');
        }
    }
    public function edit($id)
    {
        $buku = Buku::where('id', $id)->first();
        $kategoris = Kategori::all();
        $active = 'buku';

        return view('buku.edit', compact('buku', 'kategoris', 'active'));
    }

    public function editAksi($id, Request $request)
    {
        // $input = $request->all();

        // $buku = Buku::where('id', $id)->first();
        // $buku->update($input);

        // return redirect('buku');
        $buku = Buku::where('id', $id)->first();

        $buku->update([
            'judul_buku' => $request->input('judul_buku'),
            'nama_pengarang' => $request->input('nama_pengarang'),
            'nama_penerbit' => $request->input('nama_penerbit'),
            'id_kategori' => $request->input('id_kategori')
        ]);
        $buku->save();
        return redirect('buku');
    }

    public function delete($id)
    {
        $buku = Buku::where('id', $id);
        $buku->delete();

        return redirect('buku');
    }
}
