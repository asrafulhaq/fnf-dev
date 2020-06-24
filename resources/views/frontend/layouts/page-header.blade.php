  <!-- TOP BAR ADD BANNER  --> 
  @if( $home_page_data -> top_banner_switch == 'show' )
    <section class="top-bar-add-banner">
      <img id="top-bar-img" src="{{ URL::to('/') }}/public/media/home/{{ $home_page_data -> top_banner }}" alt="">
      <a id="top-bar" href="#"><i class="fas fa-times"></i></a>
    </section>
  @endif


  <!-- TOP BAR  -->
  <section class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="call-info">
            <span>{{ $home_page_data -> contact_title }}</span>
            <span>{{ $home_page_data -> contact_num }}</span>
          </div>
        </div>
        <div class="col-md-2">
          <div class="logo">
            <a href="index.html">
              <img src="{{ URL::to('/') }}/public/media/home/{{ $home_page_data -> logo }}" alt="">
            </a>
          </div>
        </div>
        <div class="col-md-5">
          <div class="ecommerce-user-items">
            <ul>
              <li><a href="#"><i class="ti-user"></i> <span>Accounts</span></a></li>
              <li><a href="#"><i class="ti-heart"></i> <span>Wish List</span></a></li>
              <li><a href="#"><i class="ti-shopping-cart"></i><span>Cart</span></a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  @include("frontend.layouts.menu")

  
 