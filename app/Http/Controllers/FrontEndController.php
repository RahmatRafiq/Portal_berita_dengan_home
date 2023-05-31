<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\kategori;
use App\Models\Penulis;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $penulis = Penulis::all();
        $artikel = Artikel::latest()->paginate(4); // Use paginate() instead of get()
        $kategori = kategori::all();

        return view('frontend.layouts.home', [
            'kategori' => $kategori,
            'artikel' => $artikel,
            'penulis' => $penulis,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $artikel = Artikel::where('slug', $slug)->first();
        $kategori = kategori::all();

        return view('frontend.detail.detail-artikel', [
            'artikel' => $artikel,
            'kategori' => $kategori,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function kategori($slug)
    {

        $kategori = Kategori::where('slug', $slug)->firstOrFail();
        $artikel = Artikel::where('kategori_id', $kategori->id)->get();
        $penulis = Penulis::all();

        return view('frontend.detail.blog-kategori', compact('kategori', 'artikel', 'penulis'));

        // $kategori = kategori::where('slug', $slug)->first();
        // $artikel = Artikel::all(); // Use paginate() instead of get()
        // $penulis = Penulis::all();

        // return view('frontend.detail.blog-kategori', [
        //     'kategori' => $kategori,
        //     'artikel' => $artikel,
        //     'penulis' => $penulis,
        // ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
