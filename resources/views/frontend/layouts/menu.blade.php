<!-- Main main-menu -->
<nav class="mein-menu">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="main-menu-list">
          <ul> 
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ route('category.search', 'dried-fish' ) }}">Ginni Package</a></li>
            <li><a href="{{ route('category.search', 'freshwater-fish' ) }}">Baburchi Package</a></li>
            <li><a href="{{ route('category.search', 'sea-food' ) }}">Utshob Package</a></li>
            <li><a href="{{ route('category.search', 'oils-extracts' ) }}">Special Recipes</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>