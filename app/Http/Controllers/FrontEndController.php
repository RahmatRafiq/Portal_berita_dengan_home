<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Penulis;
use App\Models\TentangKami;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{

    public function index()
    {

        $penulis = Penulis::all();
        $artikel = Artikel::latest()->paginate(5);
        $artkl = Artikel::orderBy('created_at', 'desc')->get();
        $artikelbulan = Artikel::whereMonth('created_at', now()->month)->orderBy('created_at', 'desc')->take(7)->get();
        $kategori = Kategori::all();
        $ktgr = Kategori::all();
        $tentangkami = TentangKami::all();
        // $trendingArtikel = Artikel::orderBy('views', 'desc')->take(5)->get();
        $trendingArtikel = Artikel::where('created_at', '>=', now()->startOfWeek())
            ->whereMonth('created_at', now()->month)
            ->orderBy('views', 'desc')
            ->take(5)
            ->get();

        return view('frontend.layouts.home', [
            'kategori' => $kategori,
            'artikel' => $artikel,
            'artkl' => $artkl,
            'penulis' => $penulis,
            'ktgr' => $ktgr,
            'tentangkami' => $tentangkami,
            'trendingArtikel' => $trendingArtikel,
            'artikelbulan' => $artikelbulan,

        ]);

    }

    public function show($slug)
    {
        $artikel = Artikel::where('slug', $slug)->first();
        $artikel->increment('views'); //melakukan penambahan jumlah views ketika mengakses detail berita berdasarkan slug
        $artikelbulan = Artikel::whereMonth('created_at', now()->month)
            ->orderBy('created_at', 'desc')
            ->take(7)
            ->get();
        $kategori = Kategori::all();
        $ktgr = Kategori::all();
        $tentangkami = TentangKami::all();
        // $trendingArtikel = Artikel::orderBy('views', 'desc')->take(5)->get();
        $trendingArtikel = Artikel::where('created_at', '>=', now()->startOfWeek())
            ->whereMonth('created_at', now()->month)
            ->orderBy('views', 'desc')
            ->take(5)
            ->get();

        return view('frontend.detail.detail-artikel', [
            'artikel' => $artikel,
            'kategori' => $kategori,
            'ktgr' => $ktgr,
            'tentangkami' => $tentangkami,
            'trendingArtikel' => $trendingArtikel,
            'artikelbulan' => $artikelbulan,

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
        $trendingArtikel = Artikel::orderBy('views', 'desc')->take(5)->get();

        return view('frontend.detail.blog-kategori', [
            'kategori' => $kategori,
            'artikel' => $artikel,
            'penulis' => $penulis,
            'artkl' => $artkl,
            'ktgr' => $ktgr,
            'tentangkami' => $tentangkami,
            'trendingArtikel' => $trendingArtikel,
        ]);
    }

    public function tentangKami()
    {
        $tentangkami = TentangKami::all();
        return view('frontend.layouts.home', [
            'tentangkami' => $tentangkami,

        ]);

    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $artikel = Artikel::where('judul', 'like', '%' . $keyword . '%')
            ->orWhere('body', 'like', '%' . $keyword . '%')
            ->paginate(5);

        $kategori = Kategori::all();
        $ktgr = Kategori::all();
        $tentangkami = TentangKami::all();
        $trendingArtikel = Artikel::orderBy('views', 'desc')->take(5)->get();

        return view('frontend.detail.search', [
            'artikel' => $artikel,
            'keyword' => $keyword,
            'kategori' => $kategori,
            'ktgr' => $ktgr,
            'tentangkami' => $tentangkami,
            'trendingArtikel' => $trendingArtikel,
        ]);
    }
}
