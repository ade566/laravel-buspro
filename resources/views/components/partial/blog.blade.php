<!-- Single Item -->
<div class="col-md-4 single-item">
	<div class="item">
		<div class="thumb">
			<a href="{{url('blog/detail/'.$item->id)}}">
				<img src="{{$item->file_image}}" alt="Blog {{$item->id}}">
			</a>
			<span class="post-formats"><i class="fas fa-image"></i></span>
		</div>
		<div class="info">
			<div class="cats">
				<a href="#">{{$item->category->title}}</a>
			</div>
			<h4>
				<a href="{{url('blog/detail/'.$item->id)}}">{{$item->title}}</a>
			</h4>
			<p>
				{{$item->overview}}
			</p>
			<div class="meta">
				<ul>
					<li><i class="fas fa-calendar-alt"></i> {{date('d M, Y', strtotime($item->created_at))}}</li>
				</ul>
				<a href="{{url('blog/detail/'.$item->id)}}">Selengkapnya</a>
			</div>
		</div>
	</div>
</div>
<!-- End Single Item -->