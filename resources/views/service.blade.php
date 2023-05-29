<x-layout>

  <x-breadcrumb title="Service" />

  <div class="services-inc-area default-padding bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="site-heading text-center">
            <h2>Our Services</h2>
            <p>
              While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        @for ($i = 0; $i < 10; $i++)
          <div class="col-md-4 mb-40p">
            <x-partial.service />
          </div>
        @endfor
      </div>
    </div>
  </div>

</x-layout>