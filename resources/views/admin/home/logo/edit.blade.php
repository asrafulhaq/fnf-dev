@extends('admin.layouts.app')


@section('dash-title','Logo Upload')
@section('user','Fish n Food')
@section('user-location','Dhaka')

@section('dash-page-content')
    

    <div class="col-sm-12">
        @include('validate')
        <section class="panel panel-default">
            <header class="panel-heading font-bold">Logo Upload</header>
            <div class="panel-body">
                <form class="bs-example form-horizontal" action="{{ url('logo-upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <img style="width: 300px;" src="{{ URL::to('/') }}/public/media/home/{{ $home_data -> logo }}" alt="">
                            <input type="hidden" name="old_file" value="{{ $home_data-> logo }}">
                        </div>
                    </div>
                    
                   
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Upload a Logo</label>
                        <div class="col-sm-10">
                            <input name="logo" type="file" class="filestyle" data-icon="false" data-classbutton="btn btn-default" data-classinput="form-control inline v-middle input-s" id="filestyle-0" style="position: fixed; left: -500px;">
                            <div class="bootstrap-filestyle" style="display: inline;">
                                <input type="text" class="form-control inline v-middle input-s" disabled="">
                                <label for="filestyle-0" class="btn btn-default"><span>Choose file</span></label>
                            </div>
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