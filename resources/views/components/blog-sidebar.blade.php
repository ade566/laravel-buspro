  <!-- Start Blog
  ============================================= -->
  <div class="blog-area full-blog left-sidebar full-blog default-padding">
    <div class="container">
      <div class="row">
        <div class="blog-items">
          <div class="blog-content col-md-8">
            {{$slot}}
          </div>
          <!-- Start Sidebar -->
          <div class="sidebar col-md-4">
            <aside>
              <div class="sidebar-item search">
                <div class="title">
                  <h4>Search</h4>
                </div>
                <div class="sidebar-info">
                  <form method="get" action="{{url('blog')}}">
                    <input type="text" class="form-control" name="title" value="{{$_GET['title'] ?? ''}}" placeholder="Search blog" />
                    <input type="submit" value="search">
                  </form>
                </div>
              </div>
              <div class="sidebar-item category">
                <div class="title">
                  <h4>category list</h4>
                </div>
                <div class="sidebar-info">
                  <ul>
                    <li>
                      <a href="#">national <span>(69)</span></a>
                    </li>
                    <li>
                      <a href="#">national <span>(25)</span></a>
                    </li>
                    <li>
                      <a href="#">sports <span>(18)</span></a>
                    </li>
                    <li>
                      <a href="#">megazine <span>(37)</span></a>
                    </li>
                    <li>
                      <a href="#">health <span>(12)</span></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="sidebar-item recent-post">
                <div class="title">
                  <h4>Recent Post</h4>
                </div>
                <ul>
                  <li>
                    <div class="thumb">
                      <a href="#">
                        <img src="{{asset('assets/img/800x800.png')}}" alt="Thumb">
                      </a>
                    </div>
                    <div class="info">
                      <a href="#">Participate in staff meetingness manage dedicated</a>
                      <div class="meta-title">
                        <span class="post-date">12 Feb, 2018</span> - By <a href="#">Author</a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="thumb">
                      <a href="#">
                        <img src="{{asset('assets/img/800x800.png')}}" alt="Thumb">
                      </a>
                    </div>
                    <div class="info">
                      <a href="#">Future Plan & Strategy for Consutruction </a>
                      <div class="meta-title">
                        <span class="post-date">12 Feb, 2018</span> - By <a href="#">Author</a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="thumb">
                      <a href="#">
                        <img src="{{asset('assets/img/800x800.png')}}" alt="Thumb">
                      </a>
                    </div>
                    <div class="info">
                      <a href="#">Melancholy particular devonshire alteration</a>
                      <div class="meta-title">
                        <span class="post-date">12 Feb, 2018</span> - By <a href="#">Author</a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="sidebar-item archives">
                <div class="title">
                  <h4>Archives</h4>
                </div>
                <div class="sidebar-info">
                  <ul>
                    <li><a href="#">Aug 2018</a></li>
                    <li><a href="#">Sept 2018</a></li>
                    <li><a href="#">Nov 2018</a></li>
                    <li><a href="#">Dec 2018</a></li>
                  </ul>
                </div>
              </div>
              <div class="sidebar-item gallery">
                <div class="title">
                  <h4>Gallery</h4>
                </div>
                <div class="sidebar-info">
                  <ul>
                    <li>
                      <a href="#">
                        <img src="{{asset('assets/img/800x800.png')}}" alt="thumb">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="{{asset('assets/img/800x800.png')}}" alt="thumb">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="{{asset('assets/img/800x800.png')}}" alt="thumb">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="{{asset('assets/img/800x800.png')}}" alt="thumb">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="{{asset('assets/img/800x800.png')}}" alt="thumb">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="{{asset('assets/img/800x800.png')}}" alt="thumb">
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="sidebar-item social-sidebar">
                <div class="title">
                  <h4>follow us</h4>
                </div>
                <div class="sidebar-info">
                  <ul>
                    <li class="facebook">
                      <a href="#">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                    </li>
                    <li class="twitter">
                      <a href="#">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </li>
                    <li class="pinterest">
                      <a href="#">
                        <i class="fab fa-pinterest"></i>
                      </a>
                    </li>
                    <li class="g-plus">
                      <a href="#">
                        <i class="fab fa-google-plus-g"></i>
                      </a>
                    </li>
                    <li class="linkedin">
                      <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="sidebar-item tags">
                <div class="title">
                  <h4>tags</h4>
                </div>
                <div class="sidebar-info">
                  <ul>
                    <li><a href="#">Fashion</a>
                    </li>
                    <li><a href="#">Education</a>
                    </li>
                    <li><a href="#">nation</a>
                    </li>
                    <li><a href="#">study</a>
                    </li>
                    <li><a href="#">health</a>
                    </li>
                    <li><a href="#">food</a>
                    </li>
                    <li><a href="#">travel</a>
                    </li>
                    <li><a href="#">science</a>
                    </li>
                  </ul>
                </div>
              </div>
            </aside>
          </div>
          <!-- End Start Sidebar -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog -->