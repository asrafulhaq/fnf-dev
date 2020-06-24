<!DOCTYPE html>
<html lang="en" class="app">
<head>
    @include('admin.layouts.header')
</head>

<body class="">
    <section class="vbox">
    @include('admin.layouts.page-header')


        <section>
            <section class="hbox stretch">

    @include('admin.layouts.menu')  


    <!-- MAIN CONTENT  -->
    <section id="content">
        <section class="hbox stretch">
            <section>
                <section class="vbox">
                    <section class="scrollable padder">



                        @include('admin.layouts.partials.dash-page-title')





                        @section('dash-page-content')
                        @show

                        


                </section>
            </section>
        </section>

    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>





            </section>
        </section>
    </section>
    <!-- Bootstrap -->






    @include('admin.layouts.footer')

</body>

</html>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>