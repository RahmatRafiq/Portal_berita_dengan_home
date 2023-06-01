 {{-- <div class="container-fluid paddding mb-5">
     <div class="row mx-0">
         @foreach ($artikel as $item)
             @if ($item->kategori->nama_kategori === 'Kampus')
                 <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
                     <div class="fh5co_suceefh5co_height">
                         <img src="{{ asset('uploads/' . $item->gambar_artikel) }}" alt="img" />
                         <div class="fh5co_suceefh5co_height_position_absolute"></div>
                         <div class="fh5co_suceefh5co_height_position_absolute_font">
                             <div class="">
                                 <a href="{{ route('detail-artikel', $item->slug) }}" class="color_fff">
                                     <i
                                         class="fa fa-clock-o"></i>&nbsp;&nbsp;{{ $item->created_at->format('d M Y') }}</a>
                             </div>
                             <div class="">
                                 <a href="{{ route('detail-artikel', $item->slug) }}" class="fh5co_good_font">
                                     {{ $item->judul }}
                                 </a>
                             </div>
                         </div>
                     </div>
                 </div>
             @break
         @endif
     @endforeach
     <div class="col-md-6">
         <div class="row">
             @foreach ($artikel as $item)
                 @if ($item->kategori->nama_kategori === 'Opini')
                     <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                         <div class="fh5co_suceefh5co_height_2"><img
                                 src="{{ asset('uploads/' . $item->gambar_artikel) }}" alt="img" />
                             <div class="fh5co_suceefh5co_height_position_absolute"></div>
                             <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                 <div class=""><a href="{{ route('detail-artikel', $item->slug) }}"
                                         class="color_fff"> <i
                                             class="fa fa-clock-o"></i>&nbsp;&nbsp;{{ $item->created_at->format('d M Y') }}
                                     </a></div>
                                 <div class=""><a href="{{ route('detail-artikel', $item->slug) }}"
                                         class="fh5co_good_font_2"> {{ $item->judul }} </a></div>
                             </div>
                         </div>
                     </div>
                 @endif
             @endforeach
             @foreach ($artikel as $item)
                 @if ($item->kategori->nama_kategori === 'Breaking News')
                     <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                         <div class="fh5co_suceefh5co_height_2"><img
                                 src="{{ asset('uploads/' . $item->gambar_artikel) }}" alt="img" />
                             <div class="fh5co_suceefh5co_height_position_absolute"></div>
                             <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                 <div class=""><a href="{{ route('detail-artikel', $item->slug) }}"
                                         class="color_fff"> <i
                                             class="fa fa-clock-o"></i>&nbsp;&nbsp;{{ $item->created_at->format('d M Y') }}
                                     </a></div>
                                 <div class=""><a href="{{ route('detail-artikel', $item->slug) }}"
                                         class="fh5co_good_font_2"> {{ $item->judul }} </a></div>
                             </div>
                         </div>
                     </div>
                 @endif
             @endforeach

             @foreach ($artikel as $item)
                 @if ($item->kategori->nama_kategori === 'Mancanegara')
                     <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                         <div class="fh5co_suceefh5co_height_2">
                             <img src="{{ asset('uploads/' . $item->gambar_artikel) }}" alt="img" />
                             <div class="fh5co_suceefh5co_height_position_absolute"></div>
                             <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                 <div class=""><a href="{{ route('detail-artikel', $item->slug) }}"
                                         class="color_fff"> <i
                                             class="fa fa-clock-o"></i>&nbsp;&nbsp;{{ $item->created_at->format('d M Y') }}
                                     </a></div>
                                 <div class=""><a href="{{ route('detail-artikel', $item->slug) }}"
                                         class="fh5co_good_font_2"> {{ $item->judul }} </a></div>
                             </div>
                         </div>
                     </div>
                 @endif
             @endforeach
             @foreach ($artikel as $item)
                 @if ($item->kategori->nama_kategori === 'Puisi')
                     <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                         <div class="fh5co_suceefh5co_height_2">
                             <img src="{{ asset('uploads/' . $item->gambar_artikel) }}" alt="img" />
                             <div class="fh5co_suceefh5co_height_position_absolute"></div>
                             <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                 <div class=""><a href="{{ route('detail-artikel', $item->slug) }}"
                                         class="color_fff"> <i
                                             class="fa fa-clock-o"></i>&nbsp;&nbsp;{{ $item->created_at->format('d M Y') }}
                                     </a></div>
                                 <div class=""><a href="{{ route('detail-artikel', $item->slug) }}"
                                         class="fh5co_good_font_2"> {{ $item->judul }} </a></div>
                             </div>
                         </div>
                     </div>
                 @endif
             @endforeach
         </div>
     </div>
 </div>
</div> --}}


 {{-- <div class="container-fluid paddding mb-5">
     <div class="row mx-0">
         @foreach ($artikel as $item)
             @if ($item->kategori->nama_kategori === 'Kampus')
                 <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
                     <div class="fh5co_suceefh5co_height">
                         <img src="{{ asset('uploads/' . $item->gambar_artikel) }}" alt="img" />
                         <div class="fh5co_suceefh5co_height_position_absolute"></div>
                         <div class="fh5co_suceefh5co_height_position_absolute_font">
                             <div class="">
                                 <a href="{{ route('detail-artikel', $item->slug) }}" class="color_fff">
                                     <i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{ $item->created_at->format('d M Y') }}
                                 </a>
                             </div>
                             <div class="">
                                 <a href="{{ route('detail-artikel', $item->slug) }}" class="fh5co_good_font">
                                     {{ $item->judul }}
                                 </a>
                             </div>
                         </div>
                     </div>
                 </div>
             @endif
         @endforeach

         <div class="col-md-6">
             <div class="row">
                 @forelse ($artikel as $item)
                     @if ($item->kategori->nama_kategori === 'Opini' || $item->kategori->nama_kategori === 'Breaking News' || $item->kategori->nama_kategori === 'Mancanegara' || $item->kategori->nama_kategori === 'Puisi')
                         <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                             <div class="fh5co_suceefh5co_height_2">
                                 <img src="{{ asset('uploads/' . $item->gambar_artikel) }}" alt="img" />
                                 <div class="fh5co_suceefh5co_height_position_absolute"></div>
                                 <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                     <div class="">
                                         <a href="{{ route('detail-artikel', $item->slug) }}" class="color_fff">
                                             <i
                                                 class="fa fa-clock-o"></i>&nbsp;&nbsp;{{ $item->created_at->format('d M Y') }}
                                         </a>
                                     </div>
                                     <div class="">
                                         <a href="{{ route('detail-artikel', $item->slug) }}"
                                             class="fh5co_good_font_2">{{ $item->judul }}</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     @endif
                 @empty
                     <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                         <p>Tidak ada artikel dalam kategori Opini, Breaking News, Mancanegara, atau Puisi.</p>
                     </div>
                 @endforelse
             </div>
         </div>
     </div>
 </div> --}}
 <div class="container-fluid paddding mb-5">
     <div class="row mx-0">
         <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
             @php
                 $kampusArtikel = $artikel->where('kategori.nama_kategori', 'Kampus')->first();
             @endphp
             @if ($kampusArtikel)
                 <div class="fh5co_suceefh5co_height">
                     <img src="{{ asset('uploads/' . $kampusArtikel->gambar_artikel) }}" alt="img" />
                     <div class="fh5co_suceefh5co_height_position_absolute"></div>
                     <div class="fh5co_suceefh5co_height_position_absolute_font">
                         <div class="">
                             <a href="{{ route('detail-artikel', $kampusArtikel->slug) }}" class="color_fff">
                                 <i
                                     class="fa fa-clock-o"></i>&nbsp;&nbsp;{{ $kampusArtikel->created_at->format('d M Y') }}
                             </a>
                         </div>
                         <div class="">
                             <a href="{{ route('detail-artikel', $kampusArtikel->slug) }}" class="fh5co_good_font">
                                 {{ $kampusArtikel->judul }}
                             </a>
                         </div>
                     </div>
                 </div>
             @endif
         </div>
         <div class="col-md-6">
             <div class="row">
                 @php
                     $kategoriArtikel = $artikel->whereIn('kategori.nama_kategori', ['Opini', 'Breaking News', 'Mancanegara', 'Puisi'])->take(4);
                 @endphp
                 @foreach ($kategoriArtikel as $item)
                     <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                         <div class="fh5co_suceefh5co_height_2">
                             <img src="{{ asset('uploads/' . $item->gambar_artikel) }}" alt="img" />
                             <div class="fh5co_suceefh5co_height_position_absolute"></div>
                             <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                 <div class=""><a href="{{ route('detail-artikel', $item->slug) }}"
                                         class="color_fff"> <i
                                             class="fa fa-clock-o"></i>&nbsp;&nbsp;{{ $item->created_at->format('d M Y') }}
                                     </a></div>
                                 <div class=""><a href="{{ route('detail-artikel', $item->slug) }}"
                                         class="fh5co_good_font_2"> {{ $item->judul }} </a></div>
                             </div>
                         </div>
                     </div>
                 @endforeach
             </div>
         </div>
     </div>
 </div>
