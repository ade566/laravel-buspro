<x-layout>

  <x-breadcrumb title="Blog" />

  <x-blog-sidebar>

    @for ($i = 0; $i < 5; $i++)

      <!-- Single Item -->
      <div class="single-item item">
        <div class="thumb">
          <a href="{{url('blog/detail/1')}}"><img src="assets/img/1500x700.png" alt="Thumb"></a>
          <span class="post-formats"><i class="fas fa-image"></i></span>
        </div>
        <div class="info">
          <div class="cats">
            <a href="#">Business</a>
            <a href="#">Assets</a>
          </div>
          <h3>
            <a href="{{url('blog/detail/1')}}">Common so wicket appear to sudden</a>
          </h3>
          <p>
            Required is debating extended wondered as do. New get described applauded incommode shameless out extremity but. Resembled at perpetual no believing is otherwise sportsman. Is do he dispatched cultivated travelling astonished. Melancholy am considered possession on collecting everything. 
          </p>
          <div class="meta">
            <ul>
              <li><i class="fas fa-calendar-alt"></i> 29 Feb, 2019</li>
            </ul>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>
      <!-- End Single Item -->     
    
    @endfor
              
    <!-- Pagination -->
    <div class="row">
      <div class="col-md-12 pagi-area">
        <nav aria-label="navigation">
          <ul class="pagination">
            <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- End Pagination -->          
  </x-blog-sidebar>

</x-layout>