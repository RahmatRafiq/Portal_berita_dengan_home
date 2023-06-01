@extends('frontend.layouts.frontend')

@section('content')
    <html lang="en" class="no-js">

    <body class="single ">

        <div class="container-fluid pb-4 pt-4 paddding">
            <div class="container paddding">
                <div class="row mx-0">
                    <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                        @forelse ($artikel as $item)
                            @if ($loop->first)
                                <div>
                                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Berita
                                        {{ $item->kategori->nama_kategori }}</div>
                                </div>
                            @endif

                            <div class="row pb-4">
                                <a href="{{ route('detail-artikel', $item->slug) }}" class="col-md-5">
                                    <div class="fh5co_hover_news_img">
                                        <div class="fh5co_news_img">
                                            <img src="{{ asset('uploads/' . $item->gambar_artikel) }}" alt="" />
                                        </div>
                                        <div></div>
                                    </div>
                                </a>
                                <div class="col-md-7 animate-box">
                                    <a href="{{ route('detail-artikel', $item->slug) }}"
                                        class="fh5co_magna py-2">{{ $item->judul }}</a>
                                    <br>
                                    <a href="{{ route('detail-artikel', $item->slug) }}" class="fh5co_mini_time py-3">
                                        {{ $item->penulis->nama_penulis }} - {{ $item->created_at->format('d M Y') }}
                                    </a>
                                    <div class="fh5co_consectetur">
                                        <p>
                                            {{ Illuminate\Support\Str::limit(strip_tags($item->body), 200) }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                        @empty
                            @if (isset($kategori))
                                <h2>Data {{ $kategori->nama_kategori }} Kosong</h2>
                            @else
                                <h2>Data Kategori yang Anda Pilih Kosong</h2>
                            @endif
                        @endforelse
                    </div>
                </div>
                {{-- <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
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
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Most Popular</div>
                </div>
                <div class="row pb-3">
                    <div class="col-5 align-self-center">
                        <img src="images/download (1).jpg" alt="img" class="fh5co_most_trading" />
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.
                        </div>
                        <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-5 align-self-center">
                        <img src="images/allef-vinicius-108153.jpg" alt="img" class="fh5co_most_trading" />
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> Enim ad minim veniam nostrud xercitation ullamco.
                        </div>
                        <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-5 align-self-center">
                        <img src="images/download (2).jpg" alt="img" class="fh5co_most_trading" />
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.
                        </div>
                        <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-5 align-self-center"><img src="images/seth-doyle-133175.jpg" alt="img"
                            class="fh5co_most_trading" /></div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.
                        </div>
                        <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                    </div>
                </div>
            </div> --}}
            </div>
        </div>

        @include('frontend.includes.js')
    </body>

    </html>
@endsection
