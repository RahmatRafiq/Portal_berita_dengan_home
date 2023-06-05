<div class="container-fluid fh5co_footer_bg pb-3">
    <br>
    <br>
    <br>
    <div class="container animate-box">
        <div class="row">

            <div class="col-12 col-md-4 col-lg-4">
                <div class="text-center">
                    @foreach ($tentangkami as $item)
                        <div class="footer_main_title py-3">Tentang kami</div>
                        <div class="footer_sub_about pb-3">
                            {!! $item->deskripsi !!}
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="footer_main_title py-3">Most Viewed Posts</div>
                <ul class="footer_post_list">
                    @foreach ($beritaTerpopulerTahun as $item)
                        <li>
                            <div class="footer_makes_sub_font">{{ date_format($item->created_at, 'M d, Y') }}
                            </div>
                            <a href="#" class="footer_post">{{ $item->judul }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="footer_main_title py-3" style="color: white;">Hubungi kami di:</div>
                <ul style="color: white;">
                    <div class="footer_mediya_icon">
                        <div class="text-center d-inline-block">
                            <a href="{{ $item->youtube }}" class="fh5co_display_table_footer" target="_blank">
                                <div class="fh5co_verticle_middle">
                                    <i class="fa fa-youtube"></i>
                                </div>
                            </a>
                        </div>
                        <div class="text-center d-inline-block">
                            <a href="mailto:{{ $item->email }}" class="fh5co_display_table_footer">
                                <div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div>
                            </a>
                        </div>
                        <div class="text-center d-inline-block">
                            <a href="{{ $item->twitter }}" class="fh5co_display_table_footer" target="_blank">
                                <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                            </a>
                        </div>
                        <div class="text-center d-inline-block">
                            <a href="{{ $item->facebook }}" class="fh5co_display_table_footer" target="_blank">
                                <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                            </a>
                        </div>
                        <div class="text-center d-inline-block">
                            <a href="{{ $item->instagram }}" class="fh5co_display_table_footer" target="_blank">
                                <div class="fh5co_verticle_middle"><i class="fa fa-instagram"></i></div>
                            </a>
                        </div>
                    </div>

                </ul>
            </div>

        </div>
    </div>
</div>

<div class="container-fluid fh5co_footer_right_reserved">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 py-4 Reserved">
                © 2023 All rights reserved. Design by <a href="mailto:rahmatrafiq.1999@gmail.com"
                    title="Rahmat">Rahmat</a>.
            </div>
        </div>
    </div>
</div>
<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
</div>
