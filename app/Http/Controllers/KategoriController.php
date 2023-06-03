<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('backend.kategori.index', compact('kategori'));
    }

    public function create()
    {
        return view('backend.kategori.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kategori' => 'required|min:2',
        ]);

        $kategori = Kategori::create([
            'nama_kategori' => $request->nama_kategori,
            'slug' => Str::slug($request->nama_kategori),
        ]);

        return redirect()->route('kategori.index')->with(['success' => 'Data Berhasi Disimpan']);
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id);
        return \view ('backend.kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['slug'] = str::slug($request->nama_kategori);

        $kategori = Kategori::findOrFail($id);
        $kategori->update($data);

        return redirect()->route('kategori.index')->with(['success' => 'Data Berhasi Terupdate']);
    }

    public function destroy($id)
    {
        $kategori = Kategori::find($id);

        $kategori->delete();

        return redirect()->route('kategori.index')->with(['success' => 'Data Berhasi Dihapus']);
    }
}
