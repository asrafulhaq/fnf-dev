@extends('admin.layouts.app')


@section('dash-title','Edit category')
@section('user','Asraful Haque')
@section('user-location','Dhaka')

@section('dash-page-content')
    
    <div class="col-sm-12">
        
        @include('validate')

        <section class="panel panel-default">
            <header class="panel-heading font-bold">Edit category</header>
            <div class="panel-body">
                <form class="bs-example form-horizontal" action="{{ route('post-category.update', $edit_cat -> id  ) }}" method="POST">

                    @csrf
                    @method('PATCH')


                    <div class="form-group">
                        <label class="col-lg-2 control-label"> Category Name </label>
                        <div class="col-lg-10">
                            <input name="name" value="{{ $edit_cat -> name }}" type="text" class="form-control" >  
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <div class="checkbox i-checks">
                                <label>
                                    <input name="status" value="Published" @if( $edit_cat -> status == 'Published') checked=""  @endif type="checkbox" ><i></i> Published
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-sm btn-default">Update category</button>
                            <a class="btn btn-sm btn-default" href="{{ route('post-category.index') }}">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

@endsection