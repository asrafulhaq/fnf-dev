 <!-- Footer Section  -->
   <footer class="footer">
    <div class="footer-top"></div>
    <div class="footer-middle">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="footer-widget">
              <img class="widget-logo" src="public/frontend/assets/media/img/logo.png" alt="">
              <p class="widget-content">Home cooks most generally use the term frosting and icing interchangeably.</p>
              <ul class="widget-social">

                @if( isset($home_page_data -> facebook) )
                <li><a href="{{ $home_page_data -> facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                @endif
                

                @if( isset($home_page_data -> twitter) )
                <li><a href="{{ $home_page_data -> twitter }}"><i class="fab fa-twitter"></i></a></li>
                @endif
                

                @if( isset($home_page_data -> linkedin) )
                <li><a href="{{ $home_page_data -> linkedin }}"><i class="fab fa-linkedin"></i></a></li>
                @endif
                

                @if( isset($home_page_data -> google_plus) )
                <li><a href="{{ $home_page_data -> google_plus }}"><i class="fab fa-google-plus-g"></i></a></li>
                @endif

                @if( isset($home_page_data -> instagram) )
                <li><a href="{{ $home_page_data -> instagram }}"><i class="fab fa-instagram-square"></i></a></li>
                @endif


              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="footer-widget">
              <h3 class="widget-title">Footer Title</h3>
              <ul class="widget-list">
                <li><a href="#">About us</a></li>
                <li><a href="#">Delivery Information</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Specials</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="footer-widget">
              <h3 class="widget-title">Footer Title</h3>
              <ul class="widget-list">
                <li><a href="#">About us</a></li>
                <li><a href="#">Delivery Information</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Specials</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="footer-widget">
              <div class="widget-payments">
                <img src="public/frontend/assets/media/img/payments/cod.webp" alt="">
                <img src="public/frontend/assets/media/img/payments/bkash.webp" alt="">
                <img src="public/frontend/assets/media/img/payments/rocket.webp" alt="">
                <img src="public/frontend/assets/media/img/payments/visa.webp" alt="">
                <br>
                <img src="public/frontend/assets/media/img/payments/city-bank.webp" alt="">
                <img src="public/frontend/assets/media/img/payments/amex-card.webp" alt="">
                <img src="public/frontend/assets/media/img/payments/dmoney.webp" alt="">
                <img src="public/frontend/assets/media/img/payments/master-card.webp" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <p>{{ $home_page_data -> footer_text }}</p>
      </div>
    </div>
   </footer>

  @include("frontend.layouts.partials.javaScripts")

