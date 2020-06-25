@extends('admin.layouts.app')


@section('dash-title','Dashboard')
@section('user','Asraful Haque')
@section('user-location','Dhaka')

@section('dash-page-content')


<div class="row">
    <div class="col-sm-6">
        <div class="panel b-a">
            <div class="row m-n">
                <div class="col-md-6 b-b b-r">
                    <a href="{{ route('product.index') }}" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-danger hover-rotate"></i> <i class="i i-plus2 i-1x text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-danger">{{ $all_product }}</span> <small class="text-muted text-u-c">Total Product</small> </span>
                    </a>
                </div>
                <div class="col-md-6 b-b">
                    <a href="{{ route('product-category.index') }}" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-success-lt hover-rotate"></i> <i class="i i-users2 i-sm text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-success">{{ $all_cat }}</span> <small class="text-muted text-u-c">Total Product Category</small> </span>
                    </a>
                </div>
                <div class="col-md-6 b-b b-r">
                    <a href="{{ url('all-orders') }}" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-info hover-rotate"></i> <i class="i i-location i-sm text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-info">{{ $all_orders }} <span class="text-sm"></span></span> <small class="text-muted text-u-c">Total Orders</small> </span>
                    </a>
                </div>
                <div class="col-md-6 b-b">
                    <a href="#" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-primary hover-rotate"></i> <i class="i i-alarm i-sm text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-primary">11</span> <small class="text-muted text-u-c">Total Sale</small> </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="panel b-a">
            <div class="row m-n">
                <div class="col-md-6 b-b b-r">
                    <a href="{{ route('product.index') }}" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-danger hover-rotate"></i> <i class="i i-plus2 i-1x text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-danger">{{ $all_product }}</span> <small class="text-muted text-u-c">Total Product</small> </span>
                    </a>
                </div>
                <div class="col-md-6 b-b">
                    <a href="{{ route('product-category.index') }}" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-success-lt hover-rotate"></i> <i class="i i-users2 i-sm text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-success">{{ $all_cat }}</span> <small class="text-muted text-u-c">Total Product Category</small> </span>
                    </a>
                </div>
                <div class="col-md-6 b-b b-r">
                    <a href="{{ url('all-orders') }}" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-info hover-rotate"></i> <i class="i i-location i-sm text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-info">{{ $all_orders }} <span class="text-sm"></span></span> <small class="text-muted text-u-c">Total Orders</small> </span>
                    </a>
                </div>
                <div class="col-md-6 b-b">
                    <a href="#" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-primary hover-rotate"></i> <i class="i i-alarm i-sm text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-primary">{{ $all_subs }}</span> <small class="text-muted text-u-c">Subscribers</small> </span>
                    </a>
                </div>
            </div>
        </div>
    </div>


</div>


@endsection