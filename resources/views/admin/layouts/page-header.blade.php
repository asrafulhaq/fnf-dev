<header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
    <div class="navbar-header aside-md dk">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html"> <i class="fa fa-bars"></i> </a>
        <a href="index.html" class="navbar-brand"> <img src="{{ URL::to('public/admin/') }}/images/logo.png" class="m-r-sm" alt="scale"> </a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user"> <i class="fa fa-cog"></i> </a>
    </div>
    

    <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
        
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="{{ URL::to('public/admin/') }}/images/a0.png" alt="..."> </span> {{ Auth::user() -> name }} <b class="caret"></b> </a>


            <ul class="dropdown-menu animated fadeInRight">
                <li> <a id="logout-btn" href="#">Logout</a> </li>
            </ul>
        </li>
    </ul>
</header>