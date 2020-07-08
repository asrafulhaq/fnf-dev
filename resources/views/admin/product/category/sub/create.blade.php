@extends('admin.layouts.app')


@section('dash-title','Add new Sub category')
@section('user','Fish n Food')
@section('user-location','Dhaka')

@section('dash-page-content')
    
    <div class="col-sm-12">
         @include('validate')
        <section class="panel panel-default">
            <header class="panel-heading font-bold">Add new sub category</header>
            <div class="panel-body">
                <form class="bs-example form-horizontal" action="{{ route('product-subcategory.store') }}" method="POST" >
                    @csrf

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Sub Category Name</label>
                        <div class="col-lg-10">
                            <input name="subcat_name" type="text" class="form-control" >  
                        </div>
                    </div>
                    
                    


                    <div id="fnf-icon-img" class="form-group">
                        <label class="col-lg-2 control-label">Category Parent</label>
                        <div class="col-lg-10">
                            <select class="form-control" name="parent" id="">
                                  <option value="">-select-</option>
                                  @foreach($all_cat as $cat)
                                  <option value="{{ $cat -> slug }}">{{ $cat -> name }}</option>
                                  @endforeach
                              </select>  
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
                            <a class="btn btn-sm btn-default" href="{{ route('product-subcategory.index') }}">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

@endsection