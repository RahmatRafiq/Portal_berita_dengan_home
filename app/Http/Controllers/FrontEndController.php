<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Penulis;
use App\Models\TentangKami;

class FrontEndController extends Controller
{

    public function index()
    {

        $penulis = Penulis::all();
        $artikel = Artikel::latest()->paginate(5);
        $artkl = Artikel::orderBy('created_at', 'desc')->get();
        $kategori = Kategori::all();
        $ktgr = Kategori::all();
        $tentangkami = TentangKami::all();
        $trendingArtikel = Artikel::orderBy('views', 'desc')->take(5)->get();

        return view('frontend.layouts.home', [
            'kategori' => $kategori,
            'artikel' => $artikel,
            'artkl' => $artkl,
            'penulis' => $penulis,
            'ktgr' => $ktgr,
            'tentangkami' => $tentangkami,
            'trendingArtikel' => $trendingArtikel,

        ]);

    }

    public function show($slug)
    {
        $artikel = Artikel::where('slug', $slug)->first();
        $kategori = Kategori::all();
        $ktgr = Kategori::all();
        $tentangkami = TentangKami::all();
        $artikel->increment('views'); //melakukan penambahan jumlah views ketika mengakses detail berita berdasarkan slug
        $trendingArtikel = Artikel::orderBy('views', 'desc')->take(5)->get();

        return view('frontend.detail.detail-artikel', [
            'artikel' => $artikel,
            'kategori' => $kategori,
            'ktgr' => $ktgr,
            'tentangkami' => $tentangkami,
            'trendingArtikel' => $trendingArtikel,
        ]);
    }

    public function kategori($slug)
    {
        $tentangkami = TentangKami::all();
        $kategori = Kategori::where('slug', $slug)->firstOrFail();
        $ktgr = Kategori::all();
        $artikel = Artikel::where('kategori_id', $kategori->id)->get();
        $artkl = Artikel::where('kategori_id', $kategori->id)->orderBy('created_at', 'desc')->get();
        $penulis = Penulis::all();

        return view('frontend.detail.blog-kategori', [
            'kategori' => $kategori,
            'artikel' => $artikel,
            'penulis' => $penulis,
            'artkl' => $artkl,
            'ktgr' => $ktgr,
            'tentangkami' => $tentangkami,
        ]);
    }

    public function tentangKami()
    {
        $tentangkami = TentangKami::all();
        return view('frontend.layouts.home', [
            'tentangkami' => $tentangkami,

        ]);

    }
}
