@extends('admin.layouts.app')


@section('dash-title','Post')
@section('user','Asraful Haque')
@section('user-location','Dhaka')

@section('dash-page-content')
    
    <div class="row">        
        <div class="col-sm-12">
            <a class="btn btn-primary btn-sm" href="{{ route('post.create') }}">Add new post</a>
            <br>
            <br>
            <section class="panel panel-default">
                <header class="panel-heading">  All posts </header>
                <table class="table table-striped m-b-none">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Post Image</th>
                            <th>Post Title</th>
                            <th>Published Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($all_posts as $post)
                        <tr>
                            <td>{{ $loop -> index + 1 }}</td>
                            <td><img style="width: 130px;" src="{{ URL::to('/') }}/public/media/blog/{{ $post -> featured_image }}" alt=""></td>
                            <td>{{ $post -> title }}</td>
                            <td>{{ $post -> created_at }}</td>
                            <td>{{ $post -> status }}</td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="">edit</a>
                                <a class="btn btn-sm btn-danger" href="">delete</a>
                            </td>
                        </tr>
                        @endforeach

                       
                    </tbody>
                </table>
            </section>
        </div>

    </div>

@endsection