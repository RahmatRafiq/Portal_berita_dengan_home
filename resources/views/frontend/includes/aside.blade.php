<div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
    <div>
        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Kategori</div>
    </div>
    <div class="clearfix"></div>
    <div class="fh5co_tags_all">
        @foreach ($kategori as $item)
            <a href="{{ route('kategori', $item->slug) }}" class="fh5co_tagg">{{ $item->nama_kategori }}</a>
        @endforeach
    </div>
    <div>
        <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Berita terbaru bulan
            {{ \Illuminate\Support\Carbon::now()->subMonth()->locale('id')->translatedFormat('F') }}
        </div>
    </div>
    <div class="row pb-3">
        @foreach ($artikelbulan as $item)
            @php
                $date = date_create($item->tanggal);
                $month = date_format($date, 'F');
                $currentMonth = date('F');
            @endphp
            @if ($month == $currentMonth)
                <div class="col-5 align-self-center" style="margin-bottom: 20px;">
                    <img src="{{ asset('uploads/' . $item->gambar_artikel) }}" alt="img"
                        class="fh5co_most_trading" />
                </div>
                <div class="col-7 paddding" style="margin-bottom: 20px;">
                    <div class="most_fh5co_treding_font">{{ $item->judul }}</div>
                    <div class="most_fh5co_treding_font_123">{{ date_format($date, 'd F, Y') }}</div>
                </div>
            @endif
        @endforeach
    </div>
</div>
