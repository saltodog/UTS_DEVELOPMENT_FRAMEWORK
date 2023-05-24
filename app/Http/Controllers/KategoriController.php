<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {

        $kategoris = Kategori::all();
        $active = 'kategori';
        return view('kategori.show', compact('kategoris', 'active'));
    }
    public function tambah()
    {
        $active = 'kategori';
        return view('kategori.tambah', compact('active'));
    }

    public function tambahAksi(Request $request)
    {
        $input = $request->all();

        $insert = Kategori::create($input);

        if ($insert) {
            return redirect('kategori');
        }
    }
    public function edit($id)
    {
        $kategori = Kategori::where('id', $id)->first();
        $active = 'kategori';

        return view('kategori.edit', compact('kategori', 'active'));
    }

    public function editAksi($id, Request $request)
    {
        $input = $request->all();

        $kategori = Kategori::where('id', $id)->first();
        $kategori->update($input);

        return redirect('kategori');
    }

    public function delete($id)
    {
        $kategori = Kategori::where('id', $id);
        $kategori->delete();

        return redirect('kategori');
    }
}
