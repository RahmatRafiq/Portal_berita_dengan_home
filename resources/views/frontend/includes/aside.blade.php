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
</div>
