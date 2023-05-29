<!-- Start Breadcrumb 
  ============================================= -->
  <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/2440x1578.png);">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <h1>{{$title}}</h1>
          <ul class="breadcrumb">
            <li><a href="{{url('/')}}"><i class="fas fa-home"></i> Home</a></li>
            @foreach ($urls as $url)
              <li><a href="{!! $url[1] !!}">{{$url[0]}}</a></li>
            @endforeach
            <li class="active">{{$title}}</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumb -->