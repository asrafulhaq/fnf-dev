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
                    <a href="#" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-danger hover-rotate"></i> <i class="i i-plus2 i-1x text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-danger">2,000</span> <small class="text-muted text-u-c">New Visits</small> </span>
                    </a>
                </div>
                <div class="col-md-6 b-b">
                    <a href="#" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-success-lt hover-rotate"></i> <i class="i i-users2 i-sm text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-success">75%</span> <small class="text-muted text-u-c">Bounce rate</small> </span>
                    </a>
                </div>
                <div class="col-md-6 b-b b-r">
                    <a href="#" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-info hover-rotate"></i> <i class="i i-location i-sm text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-info">25 <span class="text-sm">m</span></span> <small class="text-muted text-u-c">location</small> </span>
                    </a>
                </div>
                <div class="col-md-6 b-b">
                    <a href="#" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-primary hover-rotate"></i> <i class="i i-alarm i-sm text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-primary">9:30</span> <small class="text-muted text-u-c">Meeting</small> </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="panel b-a">
            <div class="panel-heading no-border bg-primary lt text-center">
                <a href="#"> <i class="fa fa-facebook fa fa-3x m-t m-b text-white"></i> </a>
            </div>
            <div class="padder-v text-center clearfix">
                <div class="col-xs-6 b-r">
                    <div class="h3 font-bold">42k</div> <small class="text-muted">Friends</small> </div>
                <div class="col-xs-6">
                    <div class="h3 font-bold">90</div> <small class="text-muted">Feeds</small> </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="panel b-a">
            <div class="panel-heading no-border bg-info lter text-center">
                <a href="#"> <i class="fa fa-twitter fa fa-3x m-t m-b text-white"></i> </a>
            </div>
            <div class="padder-v text-center clearfix">
                <div class="col-xs-6 b-r">
                    <div class="h3 font-bold">27k</div> <small class="text-muted">Tweets</small> </div>
                <div class="col-xs-6">
                    <div class="h3 font-bold">15k</div> <small class="text-muted">Followers</small> </div>
            </div>
        </div>
    </div>
    <div class="col-sm-3 hide">
        <section class="panel b-a">
            <header class="panel-heading b-b b-light">
                <ul class="nav nav-pills pull-right">
                    <li>
                        <a href="ajax.pie.html" class="text-muted" data-bjax data-target="#b-c"> <i class="i i-cycle"></i> </a>
                    </li>
                    <li>
                        <a href="#" class="panel-toggle text-muted"> <i class="i i-plus text-active"></i> <i class="i i-minus text"></i> </a>
                    </li>
                </ul> Connection </header>
            <div class="panel-body text-center bg-light lter" id="b-c">
                <div class="easypiechart inline m-b m-t" data-percent="60" data-line-width="4" data-bar-Color="#23aa8c" data-track-Color="#c5d1da" data-color="#2a3844" data-scale-Color="false" data-size="120" data-line-cap='butt' data-animate="2000">
                    <div> <span class="h2 m-l-sm step"></span>%
                        <div class="text text-xs">completed</div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


@endsection