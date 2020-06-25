@extends('admin.layouts.app')


@section('dash-title','Add new product')
@section('user','Asraful Haque')
@section('user-location','Dhaka')

@section('dash-page-content')
    
    <div class="col-sm-12">
        @include('validate')
        <section class="panel panel-default">
            <header class="panel-heading font-bold">Add new product</header>
            <div class="panel-body">
                <form class="bs-example form-horizontal" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class="form-group">
                        <label class="col-lg-2 control-label">Product Name</label>
                        <div class="col-lg-6">
                            <input name="product_name" type="text" class="form-control">  
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="col-sm-2 control-label">Category</label>
                        <div class="col-sm-10">
                            
                            

                            @foreach( $all_cat as $cat )
                            <div class="checkbox i-checks">
                                <label>
                                    <input type="checkbox" name="product_cat[]" value="{{ $cat -> id }}"> <i></i> {{ $cat -> name }} </label>
                            </div>
                            @endforeach
                            
                            
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Regular Price</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-md-2">
                                    <input type="text" name="regular_price" class="form-control" placeholder=""> </div>
                               
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Sale Price</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-md-2">
                                    <input name="sale_price" type="text" class="form-control" placeholder=""> </div>
                               
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Shipping Cost</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-md-2">
                                    <input name="shipping_cost" type="text" class="form-control" placeholder=""> </div>
                               
                            </div>
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Stock</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-md-2">
                                    <input name="stock" type="text" class="form-control" placeholder=""> </div>
                               
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
                            <textarea name="desc" id="text_editor" cols="30" rows="10"></textarea> 
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
                            <button type="submit" class="btn btn-sm btn-default">Add product</button>
                            <a class="btn btn-sm btn-default" href="{{ route('product.index') }}">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

@endsection