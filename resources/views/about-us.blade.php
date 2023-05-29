<x-layout>

  <x-breadcrumb title="About Us" />

  {{-- About Us  --}}
  <div class="about-area full-width inc-shadow mt default-padding bottom-less">
    <div class="container">
      <div class="row">
        <!-- Start About -->
        <div class="about-content content-left">
          <div class="col-md-6 info">
            <h4>About Us</h4>
            <h2>We have <span>35+ Years</span> of experiance in standard professional services</h2>
            <p>
              Seven world think timed while her. Spoil large oh he rooms on since an. Am up unwilling eagerness perceived incommode. Are not windows set luckily musical hundred can. Collecting if sympathize middletons be of of reasonably.
            </p>
            <p>
              Perceived end knowledge certainly day sweetness why cordially. Ask quick six seven offer see among. Handsome met debating sir dwelling age material. As style lived he worse dried. Offered related so visitor we private removed. Moderate do subjects to distance. 
            </p>
            <a href="#" class="btn btn-theme effect btn-md" data-animation="animated slideInUp">Read More</a>
            <a class="btn btn-md btn-contact" href="#"><i class="fas fa-phone"></i> +123 456 7890</a>
          </div>
          <div class="col-md-6 thumb">
            <img src="{{asset('assets/img/2.jpg')}}" alt="Thumb">
          </div>
        </div>
        <!-- End About -->

        <!-- Start Our Features -->
        <div class="col-md-12 text-center about-items">
          <div class="row">
            <div class="col-md-3 col-sm-6 single-item">
              <div class="item">
                <a href="#">
                  <i class="flaticon-fit"></i>
                  <h5>First Working Prosses</h5>
                </a>
              </div>
            </div>

            <div class="col-md-3 col-sm-6 single-item">
              <div class="item">
                <a href="#">
                  <i class="flaticon-target"></i>
                  <h5>IT Control Solutions</h5>
                </a>
              </div>
            </div>

            <div class="col-md-3 col-sm-6 single-item">
              <div class="item">
                <a href="#">
                  <i class="flaticon-chart"></i>
                  <h5>Audit & Assurance</h5>
                </a>
              </div>
            </div>

            <div class="col-md-3 col-sm-6 single-item">
              <div class="item">
                <a href="#">
                  <i class="flaticon-customer-service"></i>
                  <h5>24/7 Live Support</h5>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Our Features -->
      </div>
    </div>
  </div>
  {{-- Tutup About Us --}}

  <!-- Start Team Area
  ============================================= -->
  <div class="team-area carousel-shadow default-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="site-heading text-center">
            <h2>Meet our teams</h2>
            <p>
              While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="team-items team-carousel owl-carousel owl-theme text-center">
            @foreach ([
              'Afriliani Ahamad', 
              'Aulia Zatira', 
              'Elpa Padila', 
              'Keasya Aurellia Putri',
              'Lalu Maulana Fikri',
              'Lalu Rahmat Irgi F.',
              'Ragil Agung Safutra',
              'Raihan Dwi Ramadhani',
              'Rayhan M Nur Saputra',
              'Rizqi Aulia Rachman',
              'Salsabillah',
              'Siti Nurbaya Sulaiman'
            ] as $item)
            
            <!-- Single Item -->
            <div class="item">
              <div class="thumb">
                <img src="{{asset('assets/img/800x600.png')}}" alt="Thumb">
                <span class="icon"></span>
              </div>
              <div class="info">
                <h4>{{$item}}</h4>
                <span>Data Scientist</span>
                <div class="social">
                  <ul>
                    <li>
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- End Single Item -->
            
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Team Area -->

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