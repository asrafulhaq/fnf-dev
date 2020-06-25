@extends('admin.layouts.app')


@section('dash-title','All Products')
@section('user','Fish n Food')
@section('user-location','Dhaka')

@section('dash-page-content')
    
    <div class="row">        
        <div class="col-sm-12">
            @include('validate')
            <a class="btn btn-primary btn-sm" href="{{ route('product.create') }}">Add new product</a>
            <br>
            <br>
            <section class="panel panel-default">
                <header class="panel-heading">  All products </header>
                <table class="table table-striped m-b-none">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Regular Price</th>
                            <th>Sale Price</th>
                            <th>Category</th>
                            <th>Stock</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                
                        @foreach($all_product as $product)
                        
                        

                        <tr>
                            <td>{{ $loop -> index + 1 }}</td>
                            <td><img style="height:50px; width:50%;" src="{{ URL::to('') }}/public/media/products/{{  $product -> product_image }}" alt=""></td>
                            <td>{{ $product -> name }}</td>
                            <td>{{ $product -> regular_price }}</td>
                            <td>{{ $product -> sale_price }}</td>
                            <td>
                                @foreach( $product -> categories as $cat ) 
                                    {{ $cat -> name }}
                                    @if ( !$loop -> last )
                                        ,
                                    @endif
                                @endforeach
                            </td>
                            <td>{{ $product -> stock }}</td>
                            <td style="width:150px;">


                                <a class="btn btn-sm btn-warning" href="{{ route('product.edit', $product -> id ) }}">Edit</a>

                                <form style="display:inline;" action="{{ route('product.destroy', $product -> id ) }}" method="POST">
                                 @csrf
                                 @method('DELETE')
                                    <button id="delete_button_set" class="btn btn-danger btn-sm">Delete</button>
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