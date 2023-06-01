<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Penulis;

class FrontEndController extends Controller
{

    public function index()
    {

        $penulis = Penulis::all();
        $artikel = Artikel::latest()->paginate(6);
        $kategori = Kategori::all();

        return view('frontend.layouts.home', [
            'kategori' => $kategori,
            'artikel' => $artikel,
            'penulis' => $penulis,
        ]);

    }

    public function show($slug)
    {
        $artikel = Artikel::where('slug', $slug)->first();
        $kategori = Kategori::all();

        return view('frontend.detail.detail-artikel', [
            'artikel' => $artikel,
            'kategori' => $kategori,
        ]);
    }

    public function kategori($slug)
    {

        $kategori = Kategori::where('slug', $slug)->firstOrFail();
        $artikel = Artikel::where('kategori_id', $kategori->id)->get();
        $penulis = Penulis::all();

        return view('frontend.detail.blog-kategori', [
            'kategori' => $kategori,
            'artikel' => $artikel,
            'penulis' => $penulis,
        ]);

    }
    public function headblade()
    {
        return view('frontend.layouts.headblade');
    }
}
