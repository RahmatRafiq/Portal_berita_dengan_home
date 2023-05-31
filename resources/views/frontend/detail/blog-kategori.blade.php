{{-- @extends('frontend.layouts.frontend')

@section('content')
    <html lang="en" class="no-js">

    <div class="container-fluid pb-4 pt-4 paddding">
        <div class="container paddding">
            <div class="row mx-0">
                <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                    @forelse ($artikel as $item)
                        <div>
                            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Berita
                                {{ $item->kategori->nama_kategori }}</div>
                        </div>

                    @empty
                        <h2> Data Kategori yang Anda Pilih Kosong </h2>
                    @endforelse

                    @foreach ($artikel as $item)
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
                    @endforeach
                </div>
            </div>

        </div>
    </div>

    @include('frontend.includes.js')
    </body>

    </html>
@endsection --}}
{{-- @extends('frontend.layouts.frontend')

@section('content')
    <html lang="en" class="no-js">

    <div class="container-fluid pb-4 pt-4 paddding">
        <div class="container paddding">
            <div class="row mx-0">
                <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                    @forelse ($artikel as $item)
                        <div>
                            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Berita
                                {{ $item->kategori->nama_kategori }}</div>
                        </div>
@end
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
                        <h2>Data Kategori yang Anda Pilih Kosong</h2>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    @include('frontend.includes.js')
    </body>

    </html>
@endsection --}}
@extends('frontend.layouts.frontend')

@section('content')
    <html lang="en" class="no-js">

    <div class="container-fluid pb-4 pt-4 paddding">
        <div class="container paddding">
            <div class="row mx-0">
                @if ($artikel->isNotEmpty())
                    <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                        <div>
                            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Berita
                                {{ $artikel->first()->kategori->nama_kategori }}</div>
                        </div>

                        @foreach ($artikel as $item)
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
                        @endforeach
                    </div>
                @else
                    <h2>Data Kategori yang Anda Pilih Kosong</h2>
                @endif
            </div>
        </div>
    </div>

    @include('frontend.includes.js')
    </body>

    </html>
@endsection
