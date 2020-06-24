@extends('admin.layouts.app')


@section('dash-title','Category Edit')
@section('user','Fish n Food')
@section('user-location','Dhaka')

@section('dash-page-content')
    
    <div class="col-sm-12">
         @include('validate')
        <section class="panel panel-default">
            <header class="panel-heading font-bold">Category Update</header>
            <div class="panel-body">
                <form class="bs-example form-horizontal" action="{{ route('product-category.update', $single_product -> id ) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Category Name</label>
                        <div class="col-lg-10">
                            <input name="cat_name" type="text" value="{{ $single_product -> name }}" class="form-control" >  
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Category Icon name</label>
                        <div class="col-lg-10">
                            <input name="cat_icon" type="text" value="{{ $single_product -> icon }}" class="form-control">  
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <div class="checkbox i-checks">
                                <label>
                                    <input name="status" type="checkbox" @if( $single_product -> status == 'Published' ) checked="" @endif value="Published"><i></i> Published
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-sm btn-default">Update category</button>
                            <a class="btn btn-sm btn-default" href="{{ route('product-category.index') }}">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

@endsection