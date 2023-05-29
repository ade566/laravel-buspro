<div class="se-pre-con"></div>
<!-- Preloader Ends -->

<!-- Start Header Top 
============================================= -->
<div class="top-bar-area bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-8 address-info text-left">
        <div class="info box">
          <ul>
            <li>
              <div class="icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div class="info">
                <span>Alamat</span> {{$configuration->address}}
              </div> 
            </li>
            <li>
              <div class="icon">
                <i class="fas fa-envelope-open"></i>
              </div>
              <div class="info">
                <span>Email</span> {{$configuration->email}}
              </div>
            </li>
            <li>
              <div class="icon">
                <i class="fas fa-phone"></i>
              </div>
              <div class="info">
                <span>Telphone</span> {{$configuration->telp}}
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 social text-right">
        <ul>
          <li>
            <a href="https://www.facebook.com/{{$configuration->fb}}"><i class="fab fa-facebook-f"></i></a>
          </li>
          <li>
            <a href="https://twitter.com/{{$configuration->tw}}"><i class="fab fa-twitter"></i></a>
          </li>
          <li>
            <a href="https://www.instagram.com/{{$configuration->ig}}"><i class="fab fa-instagram"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- End Header Top -->

<!-- Header 
============================================= -->
<header id="home">

  <!-- Start Navigation -->
  <nav class="navbar navbar-default navbar-sticky bootsnav">

    <!-- Start Top Search -->
    <div class="container">
      <div class="row">
        <div class="top-search">
          <div class="input-group">
            <form action="#">
              <input type="text" name="text" class="form-control" placeholder="Search">
              <button type="submit">
                <i class="fas fa-search"></i>
              </button>  
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Top Search -->

    <div class="container">

      <!-- Start Atribute Navigation -->
      <div class="attr-nav">
        <ul>
          <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
        </ul>
      </div>        
      <!-- End Atribute Navigation -->

      <!-- Start Header Navigation -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="{{url('/')}}">
          <img src="{{asset('assets/img/logo.png')}}" class="logo" alt="Logo">
        </a>
      </div>
      <!-- End Header Navigation -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
          <li>
            <a href="{{url('/')}}" class="active">Home</a>
          </li>
          <li>
            <a href="{{url('/about-us')}}">About Us</a>
          </li>
          <li>
            <a href="{{url('/project')}}">Project</a>
          </li>
          <li>
            <a href="{{url('/blog')}}">Blog</a>
          </li>
          <li>
            <a href="{{url('/contact')}}">Contact</a>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>

  </nav>
  <!-- End Navigation -->

</header>