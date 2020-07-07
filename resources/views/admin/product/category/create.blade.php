@extends('admin.layouts.app')


@section('dash-title','Add new product category')
@section('user','Fish n Food')
@section('user-location','Dhaka')

@section('dash-page-content')
    
    <div class="col-sm-12">
         @include('validate')
        <section class="panel panel-default">
            <header class="panel-heading font-bold">Add new product category</header>
            <div class="panel-body">
                <form class="bs-example form-horizontal" action="{{ route('product-category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Category Name</label>
                        <div class="col-lg-10">
                            <input name="cat_name" type="text" class="form-control" >  
                        </div>
                    </div>
                    
                    

                    
                    <div id="fnf-icon" class="form-group">
                        <label class="col-lg-2 control-label">Category Icon name</label>
                        <div class="col-lg-10">
                            <input name="cat_icon" type="text" class="form-control" placeholder="If you want to add image then leave it">  
                        </div>
                    </div>

                    <div id="fnf-icon-img" class="form-group">
                        <label class="col-lg-2 control-label">Category Icon Image</label>
                        <div class="col-lg-10">
                            <input name="cat_icon_img" type="file" class="form-control">  
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <div class="checkbox i-checks">
                                <label>
                                    <input name="status" type="checkbox" checked="" value="Published"><i></i> Published
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-sm btn-default">Add category</button>
                            <a class="btn btn-sm btn-default" href="{{ route('product-category.index') }}">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

@endsection