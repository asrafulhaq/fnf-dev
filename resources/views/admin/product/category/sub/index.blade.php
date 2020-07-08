@extends('admin.layouts.app')


@section('dash-title','All Products Sub Category')
@section('user','Fish n Food')
@section('user-location','Dhaka')

@section('dash-page-content')
    
    <div class="row">   

        <div class="col-sm-12">
            @include('validate') 
            <a class="btn btn-primary btn-sm" href="{{ route('product-subcategory.create') }}">Add new product Sub category</a>
            <br>
            <br>
            <section class="panel panel-default">
                <header class="panel-heading">  All Sub category </header>
                <table class="table table-striped m-b-none">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Subcategory Name</th>
                            <th>Parent</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        

                        @foreach( $all_sub as $sub )

                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $sub -> name }}</td>
                                <td>{{ $sub -> parent }}</td>
                                <td>{{ $sub -> status }}</td>
                                <td>
                                    <a class="btn btn-danger btn-sm" href="">Delete</a>
                                </td>
                            </tr>

                        @endforeach


                        
                    </tbody>
                </table>
            </section>
        </div>

    </div>

@endsection