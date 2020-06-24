    <!-- NAV SESION  -->
    <nav class="main-menu">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <a href="#">
              <i class="fas fa-bars"></i>
              All Departments
            </a>
          </div>
          <div class="col-md-9">
            <form action="">
              <input type="search"><button><i class="fas fa-search"></i></button>
            </form>
          </div>
        </div>
      </div>
    </nav>
    <!-- Banner area  -->
    <section class="site-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="categories">
              <ul class="list-group">

                @php
                  $all_cat = App\Model\ProductCat::latest() -> take(7) -> get();;
                @endphp
                @foreach( $all_cat as $cat )
                <li class="list-group-item"><a href=""> <i class="{{ $cat -> icon }}"></i> {{ $cat -> name }}</a></li>
                @endforeach
                <li class="list-group-item"><a href=""> <i class="fas fa-utensils"></i></i> <strong> All Categories </strong> </a></li>

              </ul>
            </div>
          </div>


          <div class="col-md-9">
            <div id="site-main-banner" class="site-slider owl-carousel">
              
              @php
                $sliders = App\Model\Slider::latest() -> get();
              @endphp
              
              @foreach( $sliders  as $slide )
              <div class="site-slider-item">
                <img class="w-100" src="{{ URL::to('/') }}/public/media/slider/{{ $slide -> slide_img }}" alt="">
              </div>
              @endforeach


            </div>
          </div>



        </div>
      </div>
    </section>