@extends('admin.layouts.app')


@section('dash-title','Contact Details')
@section('user','Fish n Food')
@section('user-location','Dhaka')

@section('dash-page-content')
    

    <div class="col-sm-12">
        @include('validate')
        <section class="panel panel-default">
            <header class="panel-heading font-bold">Contact Info</header>
            <div class="panel-body">


                <form class="bs-example form-horizontal" action="{{ url('contact-upload') }}" method="POST">
                    @csrf
                    
                    
                   
                   
                   <div class="form-group">
                        <label class="col-lg-2 control-label">Contact Title</label>
                        <div class="col-lg-6">
                            <input name="contact_title" value="{{ $home_data -> contact_title }}" type="text" class="form-control">  
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Contact Number</label>
                        <div class="col-lg-6">
                            <input name="contact_num" value="{{ $home_data -> contact_num}}" type="text" class="form-control">  
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