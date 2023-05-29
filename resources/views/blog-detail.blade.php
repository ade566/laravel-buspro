<x-layout>

  <x-breadcrumb title="Blog Detail" :urls="[
    ['Blog', url('blog')]
  ]" />

  <x-blog-sidebar>
    <div class="item">

      <!-- Start Post Thumb -->
      <div class="thumb">
        <img src="{{asset('assets/img/1500x700.png')}}" alt="Thumb">
        <span class="post-formats"><i class="fas fa-image"></i></span>
      </div>
      <!-- Start Post Thumb -->

      <div class="info content-box">
        <div class="meta">
          <div class="cats">
            <a href="#">Business</a>
            <a href="#">Assets</a>
          </div>
          <div class="date">
            <i class="fas fa-calendar-alt"></i> 29 Feb, 2019
          </div>
        </div>
        
        <h3>Common so wicket appear to sudden</h3>
        <p>
          Give lady of they such they sure it. Me contained explained my education. Vulgar as hearts by garret. Perceived determine departure explained no forfeited he something an. Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence northward as difficult preserved daughters. Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her. 
        </p>
        <p>
          New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves. 
        </p>
        <blockquote>
          <p>
            He share of first to worse. Weddings and any opinions suitable smallest nay. Houses or months settle remove ladies appear. Engrossed suffering supposing he recommend do eagerness. Commanded no of depending extremity recommend 
          </p> 
        </blockquote>
        <p>
          Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you. Conduct replied off led whether any shortly why arrived adapted. Numerous ladyship so raillery humoured goodness received an. So narrow formal length my highly longer afford oh. Tall neat he make or at dull ye. 
        </p>

        <!-- Start Post Tag s-->
        <div class="post-tags share">
          <div class="tags">
            <span>Tags: </span>
            <a href="#">Consulting</a>
            <a href="#">Planing</a>
            <a href="#">Business</a>
            <a href="#">Fashion</a>
          </div>
        </div>
        <!-- End Post Tags -->
      </div>
    </div>
  </x-blog-sidebar>

</x-layout>