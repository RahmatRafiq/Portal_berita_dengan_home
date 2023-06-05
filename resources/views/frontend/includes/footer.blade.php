  <div class="container-fluid fh5co_footer_bg pb-3">
      <div class="container animate-box">
          <div class="row">
              <div class="col-12 spdp_right py-5"> <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
              </div>
              <div class="clearfix"></div>
              <div class="col-12 col-md-4 col-lg-3">
                  @foreach ($tentangkami as $item)
                      <div class="footer_main_title py-3"> Tentang kami</div>
                      <div class="footer_sub_about pb-3">

                          {!! $item->deskripsi !!}

                      </div>
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

              </div>
              @endforeach
              <div class="col-12 col-md-5 col-lg-3 position_footer_relative">
                  <div class="footer_main_title py-3">Most Viewed Posts</div>
                  <ul class="footer_post_list">
                      @foreach ($beritaTerpopulerTahun as $item)
                          <li>
                              <div class="footer_makes_sub_font">{{ date_format($item->created_at, 'M d, Y') }}</div>
                              <a href="#" class="footer_post">{{ $item->judul }}</a>
                          </li>
                      @endforeach
                  </ul>
                  <div class="footer_position_absolute"><img src="images/footer_sub_tipik.png" alt="img"
                          class="width_footer_sub_img" /></div>
              </div>

          </div>
          <div class="row justify-content-center pt-2 pb-4">
              <div class="col-12 col-md-8 col-lg-7 ">
                  <div class="input-group">
                      <span class="input-group-addon fh5co_footer_text_box" id="basic-addon1"><i
                              class="fa fa-envelope"></i></span>
                      <input type="text" class="form-control fh5co_footer_text_box" placeholder="Enter your email..."
                          aria-describedby="basic-addon1">
                      <a href="#" class="input-group-addon fh5co_footer_subcribe" id="basic-addon12"> <i
                              class="fa fa-paper-plane-o"></i>&nbsp;&nbsp;Subscribe</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="container-fluid fh5co_footer_right_reserved">
      <div class="container">
          <div class="row  ">
              <div class="col-12 col-md-6 py-4 Reserved"> © Copyright 2018, All rights reserved. Design by <a
                      href="https://freehtml5.co" title="Free HTML5 Bootstrap templates">FreeHTML5.co</a>. </div>
              <div class="col-12 col-md-6 spdp_right py-4">
                  <a href="#" class="footer_last_part_menu">Home</a>
                  <a href="Contact_us.html" class="footer_last_part_menu">About</a>
                  <a href="Contact_us.html" class="footer_last_part_menu">Contact</a>
                  <a href="blog.html" class="footer_last_part_menu">Latest News</a>
              </div>
          </div>
      </div>
  </div>

  <div class="gototop js-top">
      <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
  </div>
