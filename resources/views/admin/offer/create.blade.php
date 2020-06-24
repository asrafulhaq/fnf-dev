@extends('admin.layouts.app')


@section('dash-title','Add new  offer slide')
@section('user','Fish n Food')
@section('user-location','Dhaka')

@section('dash-page-content')
    
    <div class="col-sm-12">
        @include('validate')
        <section class="panel panel-default">
            <header class="panel-heading font-bold">Add new offer slide</header>
            <div class="panel-body">
                <form class="bs-example form-horizontal" action="{{ route('offer-slider.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf




                    <div class="form-group">
                        <label class="col-sm-2 control-label">Slide Image</label>
                        <div class="col-sm-10">
                            <input name="slide_image" type="file" class="filestyle" data-icon="false" data-classbutton="btn btn-default" data-classinput="form-control inline v-middle input-s" id="filestyle-0" style="position: fixed; left: -500px;">
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
                                    <input name="status" value="Published" type="checkbox" checked=""><i></i> Published
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-sm btn-default">Add offer slide</button>
                            <a class="btn btn-sm btn-default" href="{{ route('offer-slider.index') }}">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

@endsection