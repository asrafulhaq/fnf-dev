@extends('admin.layouts.app')


@section('dash-title','Edit Product')
@section('user','Fish n Food')
@section('user-location','Dhaka')

@section('dash-page-content')
    
    <div class="col-sm-12">
        @include('validate')
        <section class="panel panel-default">
            <header class="panel-heading font-bold">Update product</header>
            <div class="panel-body">
                <form class="bs-example form-horizontal" action="{{ route('product.update', $single_product -> id ) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')


                    <div class="form-group">
                        <label class="col-lg-2 control-label">Product Name</label>
                        <div class="col-lg-6">
                            <input name="product_name" type="text" value="{{ $single_product -> name }}" class="form-control">  
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="col-sm-2 control-label">Category</label>
                        <div class="col-sm-10">
                            
                            

                            @foreach( $categories as $cat )
                            @php

                                if( in_array($cat -> name , json_decode($single_product -> categories)) ){
                                    $checked = "checked";
                                }else{
                                     $checked = "";
                                }
                            @endphp
                            <div class="checkbox i-checks">
                                <label>
                                    <input type="checkbox" {{ $checked }}  name="product_cat[]" value="{{ $cat -> name }}"> <i></i> {{ $cat -> name }} </label>
                            </div>
                            @endforeach
                            
                            
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Regular Price</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-md-2">
                                    <input type="text" value="{{ $single_product -> regular_price }}" name="regular_price" class="form-control" placeholder=""> </div>
                               
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Sale Price</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-md-2">
                                    <input name="sale_price" type="text" value="{{ $single_product -> sale_price }}" class="form-control" placeholder=""> </div>
                               
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Shipping Cost</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-md-2">
                                    <input name="shipping_cost" value="{{ $single_product -> shiping_cost }}" type="text" class="form-control" placeholder=""> </div>
                               
                            </div>
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Stock</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-md-2">
                                    <input name="stock" type="text" value="{{ $single_product -> stock }}" class="form-control" placeholder=""> </div>
                               
                            </div>
                        </div>
                    </div>



                    


                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-md-2">
                                    <img style="width:250px; margin-bottom:20px;" src="{{ URL::to('/') }}/public/media/products/{{ $single_product -> product_image }}" alt="">
                                    <input name="old_photo" value="{{ $single_product -> product_image }}" type="hidden">                               
                            </div>
                        </div>
                    </div>


                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Product Image</label>
                        <div class="col-sm-10">
                            <input name="product_image" type="file" class="filestyle" data-icon="false" data-classbutton="btn btn-default" data-classinput="form-control inline v-middle input-s" id="filestyle-0" style="position: fixed; left: -500px;">
                            <div class="bootstrap-filestyle" style="display: inline;">
                                <input type="text" class="form-control inline v-middle input-s" disabled="">
                                <label for="filestyle-0" class="btn btn-default"><span>Choose file</span></label>
                            </div>
                        </div>
                    </div>



                    
                    
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Description</label>
                        <div class="col-lg-10">
                            <textarea name="desc" id="text_editor" cols="30" rows="10">{{ $single_product -> desc }}</textarea> 
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
                            <button type="submit" class="btn btn-sm btn-default">Update product</button>
                            <a class="btn btn-sm btn-default" href="{{ route('product.index') }}">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

@endsection