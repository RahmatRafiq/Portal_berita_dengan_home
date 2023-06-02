 <div class="container-fluid fh5co_header_bg">
     <div class="container">
         <div class="row">
             <div class="col-12 fh5co_mediya_center"><a href="#" class="color_fff fh5co_mediya_setting"><i
                         class="fa fa-clock-o"></i>&nbsp;&nbsp;&nbsp;Friday, 5 January 2018</a>
                 <div class="d-inline-block fh5co_trading_posotion_relative"><a href="#"
                         class="treding_btn">Trending</a>
                     <div class="fh5co_treding_position_absolute"></div>
                 </div>
                 <a href="#" class="color_fff fh5co_mediya_setting">Instagram’s big redesign goes live with
                     black-and-white app</a>
             </div>
         </div>
     </div>
 </div>
 <div class="container-fluid">
     @foreach ($tentangkami as $tentang)
         <div class="container">
             <div class="row">
                 <a href="/">
                     <div class="col-12 col-md-3 fh5co_padding_menu">
                         <img src="{{ asset('uploads/' . $tentang->gambar) }}" alt="img"
                             class="fh5co_logo_width" />
                 </a>
             </div>
             <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
                 <div class="text-center d-inline-block">
                     <a class="fh5co_display_table">
                         <div class="fh5co_verticle_middle"><i class="fa fa-search"></i></div>
                     </a>
                 </div>
                 <div class="text-center d-inline-block">
                     <a class="fh5co_display_table">
                         <div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div>
                     </a>
                 </div>
                 <div class="text-center d-inline-block">
                     <a class="fh5co_display_table">
                         <div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div>
                     </a>
                 </div>
                 <div class="text-center d-inline-block">
                     <a href="https://twitter.com/fh5co" target="_blank" class="fh5co_display_table">
                         <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                     </a>
                 </div>
                 <div class="text-center d-inline-block">
                     <a href="https://fb.com/fh5co" target="_blank" class="fh5co_display_table">
                         <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                     </a>
                 </div>
             </div>
         </div>
 </div>
 @endforeach
 </div>
 <div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
     <div class="container padding_786">
         <nav class="navbar navbar-toggleable-md navbar-light ">
             <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                 data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                 aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
             <a class="navbar-brand" href="#"><img src="images/logo.png" alt="img"
                     class="mobile_logo_width" /></a>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav mr-auto">
                     @foreach ($ktgr->take(6) as $ktgr)
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('kategori', $ktgr->slug) }}">{{ $ktgr->nama_kategori }}
                                 <span class="sr-only">(current)
                                 </span>
                             </a>
                         </li>
                     @endforeach
                     <li class="nav-item ">
                         <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                     </li>
                 </ul>
             </div>
         </nav>
     </div>
 </div>
