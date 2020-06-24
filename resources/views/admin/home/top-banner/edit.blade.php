@extends('admin.layouts.app')


@section('dash-title','Top Banner')
@section('user','Asraful Haque')
@section('user-location','Dhaka')

@section('dash-page-content')
    
    @foreach($home_data as $data)
    <div class="col-sm-12">
        @include('validate')
        <section class="panel panel-default">
            <header class="panel-heading font-bold">Add / Update Top Banner</header>
            <div class="panel-body">
                <form class="bs-example form-horizontal" action="{{ url('top-banner-upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <img style="width: 500px;" src="{{ URL::to('/') }}/public/media/home/{{ $data -> top_banner }}" alt="">
                            <input type="hidden" name="old_file" value="{{ $data -> top_banner }}">
                        </div>
                    </div>
                    
                   
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Select Top Banner</label>
                        <div class="col-sm-10">
                            <input name="top_banner" type="file" class="filestyle" data-icon="false" data-classbutton="btn btn-default" data-classinput="form-control inline v-middle input-s" id="filestyle-0" style="position: fixed; left: -500px;">
                            <div class="bootstrap-filestyle" style="display: inline;">
                                <input type="text" class="form-control inline v-middle input-s" disabled="">
                                <label for="filestyle-0" class="btn btn-default"><span>Choose file</span></label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <div class="checkbox i-checks">
                                <label>
                                    <input type="checkbox" <?php if( $data -> top_banner_switch == 'show' ){ echo "checked"; } ?> name="show"  value="show"><i></i> Show </label>
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

    @endforeach

@endsection