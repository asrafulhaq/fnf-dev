@extends('admin.layouts.app')


@section('dash-title','Post Category')
@section('user','Asraful Haque')
@section('user-location','Dhaka')

@section('dash-page-content')
    
    <div class="row">        
        <div class="col-sm-12">
            
            @include('validate')

            <a class="btn btn-primary btn-sm" href="{{ route('post-category.create') }}">Add new post category</a>
            <br>
            <br>
            <section class="panel panel-default">
                <header class="panel-heading">  All category </header>
                <table class="table table-striped m-b-none">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Title</th>
                            <th>Category Slug</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach( $all_cat as $cat)
                        <tr>
                            <td>{{ $loop -> index + 1 }}</td>
                            <td>{{ $cat -> name }}</td>
                            <td>{{ $cat -> slug }}</td>
                            <td>{{ $cat -> created_at }}</td>
                            <td>{{ $cat -> status }}</td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="{{ route('post-category.edit', $cat -> id ) }}">edit</a>
                                
                                <form style="display: inline-block;" action="{{ route('post-category.destroy', $cat -> id ) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button id="delete_button_set" class="btn btn-sm btn-danger">delete</button>
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