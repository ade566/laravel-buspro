<footer class="bg-light">
  <!-- Start Footer Top -->
  <div class="footer-top bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 logo">
          <a href="{{url('/')}}"><img src="{{asset('assets/img/logo.png')}}" alt="Logo"></a>
        </div>
        <div class="col-md-8 col-sm-8 form text-right">
          <form action="#">
            <div class="input-group stylish-input-group">
              <input type="email" placeholder="Enter your e-mail here" class="form-control" name="email">
              <span class="input-group-addon">
                <button type="submit">
                  Subscribe <i class="fa fa-paper-plane"></i>
                </button>  
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End Footer Top -->
  <div class="container">
    <div class="row">
      <div class="f-items default-padding">

        <!-- Single Item -->
        <div class="col-md-4 equal-height item">
          <div class="f-item">
            <h4>About</h4>
            <p>
              Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address did showing because sitting replied six. Had arose guest visit going off child
            </p>
            <div class="social">
              <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End Single Item -->
        <!-- Single Item -->
        <div class="col-md-4 equal-height item">
          <div class="f-item link">
            <h4>Services</h4>
            <ul>
              <li>
                <a href="#">Financial Planning</a>
              </li>
              <li>
                <a href="#">Investment Planning</a>
              </li>
              <li>
                <a href="#">Lead Generation</a>
              </li>
              <li>
                <a href="#">Email Marketing</a>
              </li>
              <li>
                <a href="#">Mutual Funds</a>
              </li>
              <li>
                <a href="#">Business Services</a>
              </li>
              <li>
                <a href="#">Social Marketing</a>
              </li>
              <li>
                <a href="#">Growth Hacking</a>
              </li>
              <li>
                <a href="#">Markets Research</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- End Single Item -->
        <!-- Single Item -->
        <div class="col-md-4 equal-height item">
          <div class="f-item recent-post">
            <h4>Recent Posts</h4>
            <ul>
              @for ($i = 0; $i < 2; $i++)
              <li>
                <div class="thumb">
                  <a href="{{url('blog/detail/1')}}">
                    <img src="{{asset('assets/img/800x800.png')}}" alt="Thumb">
                  </a>
                </div>
                <div class="info">
                  <a href="{{url('blog/detail/1')}}">Debating all she mistaken indulged believed provided declared</a>
                  <div class="meta-title">
                    <span class="post-date">12 Feb, 2019</span> - By <a href="#">Author</a>
                  </div>
                </div>
              </li>
              @endfor
            </ul>
          </div>
        </div>
        <!-- End Single Item -->
      </div>
    </div>
  </div>
  <!-- Start Footer Bottom -->
  <div class="footer-bottom bg-dark text-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>&copy; Copyright 2019. All Rights Reserved by <a href="#">validthemes</a></p>
        </div>
        <div class="col-md-6 text-right link">
          <ul>
            <li>
              <a href="#">Terms of user</a>
            </li>
            <li>
              <a href="#">License</a>
            </li>
            <li>
              <a href="#">Support</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- End Footer Bottom -->
</footer>