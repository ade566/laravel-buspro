<div class="item">
  <div class="thumb">
    <img src="{{$item->file_image}}" alt="Thumb">
    <div class="overlay">
      <a href="{{url('service/detail/'.$item->id)}}">
        <i class="flaticon-report"></i>
        <h4>{{$item->title}}</h4>
      </a>
    </div>
  </div>
  <div class="info">
    <p>
      {{$item->overview}}
    </p>
    <a href="{{url('service/detail/'.$item->id)}}">Read More <i class="fas fa-angle-double-right"></i></a>
  </div>
</div>