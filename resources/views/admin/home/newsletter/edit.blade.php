@extends('admin.layouts.app')


@section('dash-title','Newsletter')
@section('user','Fish n Food')
@section('user-location','Dhaka')

@section('dash-page-content')
    

    <div class="col-sm-12">
        @include('validate')
        <section class="panel panel-default">
            <header class="panel-heading font-bold">Newsletter setup</header>
            <div class="panel-body">
                <form class="bs-example form-horizontal" action="{{ url('newsletter-upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <img style="width: 600px;" src="{{ URL::to('/') }}/public/media/home/{{ $home_data -> newsletter_bg }}" alt="">
                            <input type="hidden" name="old_file" value="{{ $home_data-> newsletter_bg }}">
                        </div>
                    </div>
                    
                   
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Upload background </label>
                        <div class="col-sm-10">
                            <input name="newsletter_bg" type="file" class="filestyle" data-icon="false" data-classbutton="btn btn-default" data-classinput="form-control inline v-middle input-s" id="filestyle-0" style="position: fixed; left: -500px;">
                            <div class="bootstrap-filestyle" style="display: inline;">
                                <input type="text" class="form-control inline v-middle input-s" disabled="">
                                <label for="filestyle-0" class="btn btn-default"><span>Choose file</span></label>
                            </div>
                        </div>
                    </div>




                    <div class="form-group">
                        <label class="col-lg-2 control-label">Newsletter Heading</label>
                        <div class="col-lg-6">
                            <input name="newsletter_title" value="{{ $home_data -> newsletter_title }}" type="text" class="form-control">  
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Newsletter Description</label>
                        <div class="col-lg-6">
                            <textarea class="form-control" name="newsletter_desc" id="" >{{ $home_data -> newsletter_desc }}</textarea> 
                        </div>
                    </div>
                    



                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-sm btn-default">Upload</button>
                        </div>
                    </div>


                </form>
            </div>
        </section>
    </div>


@endsection