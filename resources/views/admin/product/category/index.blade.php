@extends('admin.layouts.app')


@section('dash-title','All Products Category')
@section('user','Fish n Food')
@section('user-location','Dhaka')

@section('dash-page-content')
    
    <div class="row">   

        <div class="col-sm-12">
            @include('validate') 
            <a class="btn btn-primary btn-sm" href="{{ route('product-category.create') }}">Add new product category</a>
            <br>
            <br>
            <section class="panel panel-default">
                <header class="panel-heading">  All category </header>
                <table class="table table-striped m-b-none">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Slug</th>
                            <th>Sub Category</th>
                            <th>icon</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach( $all_cat  as $cat) 
                        <tr>
                            <td>{{ $loop -> index + 1 }}</td>
                            <td>{{ $cat -> name }}</td>
                            <td>{{ $cat -> slug }}</td>
                            <td>{{ $cat -> sub_cat }}</td>
                            <td>{{ $cat -> icon }}</td>
                            <td>{{ $cat -> status }}</td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="{{ route('product-category.edit', $cat -> id ) }}">edit</a>


                                <form style="display: inline-block;" action="{{ route('product-category.destroy', $cat -> id ) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" type="submit" >Delete</button>
                                </form>


                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </section>
        </div>

    </div>

@endsection