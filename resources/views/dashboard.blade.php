<x-layout>
  {{-- Slier  --}}
  <div class="banner-area">
    <div id="bootcarousel" class="carousel inc-top-heading slide carousel-fade animate_text" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner text-light carousel-zoom">
        @foreach ($sliders as $key => $slider)

        <div class="item {{!$key ? 'active' : ''}}">
          <div class="slider-thumb bg-cover" style="background-image: url({{$slider->file_image}});"></div>
          <div class="box-table shadow dark">
            <div class="box-cell">
              <div class="container">
                <div class="row">
                  <div class="col-md-8">
                    <div class="content">
                      <h3 data-animation="animated slideInRight">{{$slider->title}}</h3>
                      <h1 data-animation="animated slideInLeft">{{$slider->overview}}</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        @endforeach
      </div>
      <!-- End Wrapper for slides -->

      <!-- Left and right controls -->
      <a class="left carousel-control shadow" href="#bootcarousel" data-slide="prev">
        <i class="fa fa-angle-left"></i>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control shadow" href="#bootcarousel" data-slide="next">
        <i class="fa fa-angle-right"></i>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  {{-- Tutup Slider  --}}

  {{-- About Us  --}}
  <div class="about-area full-width inc-shadow mt default-padding bottom-less">
    <div class="container">
      <div class="row">
        <!-- Start About -->
        <div class="about-content content-left">
          <div class="col-md-6 info">
            <h4>Tentang Kami</h4>
            <h2>{{$configuration->title_about_us}}</h2>
            <p>
              {{$configuration->overview_about_us}}
            </p>
            <p>
              {{$configuration->description_about_us}}
            </p>
            <a class="btn btn-md btn-contact" href="#"><i class="fas fa-phone"></i> {{$configuration->telp}}</a>
          </div>
          <div class="col-md-6 thumb">
            <img src="{{asset('assets/img/2.jpg')}}" alt="Thumb">
          </div>
        </div>
        <!-- End About -->

        <!-- Start Our Features -->
        <div class="col-md-12 text-center about-items">
          <div class="row">
            @foreach ($chooseus as $item_chooseus)
                
            <div class="col-md-3 col-sm-6 single-item">
              <div class="item">
                <a href="#">
                  <img src="{{$item_chooseus->file_image}}" style="width: 100px; margin-bottom:20px;" />
                  <h5>{{$item_chooseus->title}}</h5>
                </a>
              </div>
            </div>

            @endforeach
          </div>
        </div>
        <!-- End Our Features -->
      </div>
    </div>
  </div>
  {{-- Tutup About Us --}}

  <!-- Start Services  -->
  <div class="services-inc-area half-bg carousel-shadow default-padding bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="site-heading text-light text-center">
            <h2>Layanan Kami</h2>
            <p>
              While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="services-items services-carousel owl-carousel owl-theme">
            @foreach ($services as $service)
                
              <x-partial.service :item="$service" />
            
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Services -->

  <!-- Start Portfolio
  ============================================= -->
  <div class="portfolio-area bg-gray inc-colum default-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="site-heading text-center">
            <h2>Complete Cases</h2>
            <p>
              While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
            </p>
          </div>
        </div>
      </div>
      <div class="portfolio-items-area text-center">
        <div class="row">
          <div class="col-md-12 portfolio-content">
            <div class="mix-item-menu text-center">
              <button class="active" data-filter="*">All</button>
              <button data-filter=".development">Development</button>
              <button data-filter=".consulting">Consulting</button>
              <button data-filter=".finance">Finance</button>
              <button data-filter=".branding">Branding</button>
              <button data-filter=".capital">Capital</button>
            </div>
            <!-- End Mixitup Nav-->

            <div class="row magnific-mix-gallery text-center masonary">
              <div id="portfolio-grid" class="portfolio-items col-3">
                <!-- Single Item -->
                <div class="pf-item development capital">
                  <div class="effect-left-swipe">
                    <img src="assets/img/800x600.png" alt="thumb">
                    <a href="assets/img/800x600.png" class="item popup-link"><i class="fa fa-plus"></i></a>
                    <div class="icons">
                      <h4><a href="#">Startup Funding</a></h4>
                      <div class="cat">
                        <span>Finance</span>
                        <span>Assets</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="pf-item consulting branding">
                  <div class="effect-left-swipe">
                    <img src="assets/img/800x800.png" alt="thumb">
                    <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-plus"></i></a>
                    <div class="icons">
                      <h4><a href="#">Accounting Advisory</a></h4>
                      <div class="cat">
                        <span>Creative</span>
                        <span>Minimal</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="pf-item consulting finance">
                  <div class="effect-left-swipe">
                    <img src="assets/img/800x600.png" alt="thumb">
                    <a href="assets/img/800x600.png" class="item popup-link"><i class="fa fa-plus"></i></a>
                    <div class="icons">
                      <h4><a href="#">Merger & Acquisition</a></h4>
                      <div class="cat">
                        <span>Benefits</span>
                        <span>Business</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="pf-item finance">
                  <div class="effect-left-swipe">
                    <img src="assets/img/800x800.png" alt="thumb">
                    <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-plus"></i></a>
                    <div class="icons">
                      <h4><a href="#">Assets For Technology</a></h4>
                      <div class="cat">
                        <span>Invest</span>
                        <span>Earning</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="pf-item capital development">
                  <div class="effect-left-swipe">
                    <img src="assets/img/800x800.png" alt="thumb">
                    <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-plus"></i></a>
                    <div class="icons">
                      <h4><a href="#">Business Matching</a></h4>
                      <div class="cat">
                        <span>Finance</span>
                        <span>Assets</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="pf-item consulting branding">
                  <div class="effect-left-swipe">
                    <img src="assets/img/800x600.png" alt="thumb">
                    <a href="assets/img/800x600.png" class="item popup-link"><i class="fa fa-plus"></i></a>
                    <div class="icons">
                      <h4><a href="#">Startup Funding</a></h4>
                      <div class="cat">
                        <span>Source</span>
                        <span>Business</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Single Item -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Portfolio -->

  <!-- Start Blog Area
  ============================================= -->
  <div class="blog-area default-padding bottom-less">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="site-heading text-center">
            <h2>Latest Blog</h2>
            <p>
              While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach ($blogs as $blog)
            
          <x-partial.blog :item="$blog" />

        @endforeach
      </div>
    </div>
  </div>
  <!-- End Blog Area -->

  <!-- Start Clients Area
  ============================================= -->
  <div class="clients-area bg-dark default-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4 left-info text-light">
          <h4>Our Partners</h4>
          <p>
            Forming two comfort invited. Yet she income effect edward. Entire desire way design few. Mrs sentiments led solicitude estimating friendship fat. Meant those event 
          </p>
        </div>
        <div class="col-md-8 clients-box">
          <div class="clients-items owl-carousel owl-theme text-center">
            @for ($i = 0; $i < 10; $i++)
            <div class="single-item">
              <a href="#"><img src="{{asset('assets/img/150x80.png')}}" alt="Clients"></a>
            </div>
            @endfor
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Clients Area -->

</x-layout>