<!-- .aside -->
<aside class="bg-black aside-md hidden-print hidden-xs" id="nav">
    <section class="vbox">
        <section class="w-f scrollable">
            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">





                <!-- nav -->
                <nav class="nav-primary hidden-xs">
                    <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Start</div>
                    <ul class="nav nav-main" data-ride="collapse">


                        <li>
                            <a href="{{ url('dashboard') }}" class="auto"> <i class="i i-statistics icon"> </i> <span class="font-bold">Dashboard</span> </a>
                        </li>



                        

                        <li>
                            <a href="#" class="auto"> 
                                
                                <i class="i i-stack icon"> </i> 
                                <span class="font-bold">Products</span>
                            </a>
                            <ul class="nav dk">
                                <li>
                                    <a href="{{ route('product.index') }}" class="auto"> <i class="i i-dot"></i> <span>All Products</span> </a>
                                </li>
                                <li>
                                    <a href="{{ route('product-category.index') }}" class="auto"> <i class="i i-dot"></i> <span>Products Category</span> </a>
                                </li>

                                <li>
                                    <a href="{{ route('product-subcategory.index') }}" class="auto"> <i class="i i-dot"></i> <span>Products Sub Category</span> </a>
                                </li>
                                
                                
                            </ul>
                        </li>


                        <li>
                            <a href="#" class="auto"> 
                                
                                <i class="i i-stack icon"> </i> 
                                <span class="font-bold">Posts</span>
                            </a>
                            <ul class="nav dk">
                                <li>
                                    <a href="{{ route('post.index') }}" class="auto"> <i class="i i-dot"></i> <span>All Posts</span> </a>
                                </li>
                                <li>
                                    <a href="{{ route('post-category.index') }}" class="auto"> <i class="i i-dot"></i> <span>Post Category</span> </a>
                                </li>
                                

                                
                            </ul>
                        </li>


                        <li>
                            <a href="" class="auto"> 
                                
                                <i class="i i-stack icon"> </i> 
                                <span class="font-bold">Orders</span>
                            </a>
                            <ul class="nav dk">
                                <li>
                                    <a href="{{ route('all-orders') }}" class="auto"> <i class="i i-dot"></i> <span>All Orders</span> </a>
                                </li>
                                <li>
                                    <a href="{{ url('order-pending-all') }}" class="auto"> <i class="i i-dot"></i> <span>Pending Orders</span> </a>
                                </li>
                                <li>
                                    <a href="{{ url('order-complete-all') }}" class="auto"> <i class="i i-dot"></i> <span>Complete Orders</span> </a>
                                </li>
                                
                            </ul>
                        </li>
{{-- 
                        <li>
                            <a href="" class="auto"> <i class="i i-statistics icon"> </i> <span class="font-bold">Customers</span> </a>
                        </li> --}}

                        <li>
                            <a href="{{ route('home-slider.index') }}" class="auto"> <i class="i i-statistics icon"> </i> <span class="font-bold">Sliders</span> </a>
                        </li>


                        <li>
                            <a href="{{ url('subscriber') }}" class="auto"> <i class="i i-statistics icon"> </i> <span class="font-bold">Subscriber</span> </a>
                        </li>


                        <li>
                            <a href="#" class="auto"> 
                                
                                <i class="i i-stack icon"> </i> 
                                <span class="font-bold">Settings</span>
                            </a>
                            <ul class="nav dk">
                                <li>
                                    <a href="{{ url('logo') }}" class="auto"> <i class="i i-dot"></i> <span>Logo</span> </a>
                                </li>
                                <li>
                                    <a href="{{ url('contact-info') }}" class="auto"> <i class="i i-dot"></i> <span>Contact Info</span> </a>
                                </li>
                                <li>
                                    <a href="{{ url('footer') }}" class="auto"> <i class="i i-dot"></i> <span>Footer Text</span> </a>
                                </li>

                                <li>
                                    <a href="{{ url('social') }}" class="auto"> <i class="i i-dot"></i> <span>Social Links</span> </a>
                                </li>
                                
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="auto"> 
                                
                                <i class="i i-stack icon"> </i> 
                                <span class="font-bold">Homepage Setup</span>
                            </a>
                            <ul class="nav dk">
                                <li>
                                    <a href="{{ url('top-banner') }}" class="auto"> <i class="i i-dot"></i> <span>Top Banner</span> </a>
                                </li>
                                

                                <li>
                                    <a href="{{ url('page-banner') }}" class="auto"> <i class="i i-dot"></i> <span>Page Banner</span> </a>
                                </li>
                                

                                <li>
                                    <a href="{{ route('offer-slider.index') }}" class="auto"> <i class="i i-dot"></i> <span>Offer Slider</span> </a>
                                </li>
                                <li>
                                    <a href="{{ route('media-partner.index') }}" class="auto"> <i class="i i-dot"></i> <span>Media Partner</span> </a>
                                </li>

                                 <li>
                                    <a href="{{ url('newsletter') }}" class="auto"> <i class="i i-dot"></i> <span>Newsletter</span> </a>
                                </li>
                                
                                
                            </ul>
                        </li>





                    
                </nav>
                <!-- / nav -->
            </div>
        </section>













        <footer class="footer hidden-xs no-padder text-center-nav-xs">
            <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs"> <i class="i i-logout"></i> </a>
            <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs"> <i class="i i-circleleft text"></i> <i class="i i-circleright text-active"></i> </a>
        </footer>
    </section>
</aside>
<!-- /.aside -->