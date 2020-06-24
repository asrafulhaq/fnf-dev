@extends('admin.layouts.app')


@section('dash-title','Social Links')
@section('user','Fish n Food')
@section('user-location','Dhaka')

@section('dash-page-content') 
    

    <div class="col-sm-12">
        @include('validate')
        <section class="panel panel-default">
            <header class="panel-heading font-bold">Social Links</header>
            <div class="panel-body">


                <form class="bs-example form-horizontal" action="{{ url('social-upload') }}" method="POST">
                    @csrf
                    
                    
                   
                   
                   <div class="form-group">
                        <label class="col-lg-2 control-label">Facebook</label>
                        <div class="col-lg-6">
                            <input name="fb" value="{{ $home_data -> facebook }}" type="text" class="form-control">  
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Twitter</label>
                        <div class="col-lg-6">
                            <input name="tw" value="{{ $home_data -> twitter }}" type="text" class="form-control">  
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-lg-2 control-label">Linked In</label>
                        <div class="col-lg-6">
                            <input name="lin" value="{{ $home_data -> linkedin }}" type="text" class="form-control">  
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Google Plus</label>
                        <div class="col-lg-6">
                            <input name="google" value="{{ $home_data -> google_plus }}" type="text" class="form-control">  
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Instagram</label>
                        <div class="col-lg-6">
                            <input name="insta" value="{{ $home_data -> instagram }}" type="text" class="form-control">  
                        </div>
                    </div>

                    



                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-sm btn-default">Add</button>
                        </div>
                    </div>


                </form>
            </div>
        </section>
    </div>


@endsection