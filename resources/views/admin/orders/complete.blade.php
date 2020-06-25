@extends('admin.layouts.app')


@section('dash-title','All Complete Orders')
@section('user','Fish n Food')
@section('user-location','Dhaka')

@section('dash-page-content')
    
    <div class="row">        
        <div class="col-sm-12">
            @include('validate')
            <br>
            <br>


            <section class="panel panel-default">
                <header class="panel-heading">  All Complete Orders </header>
                <table class="table table-striped m-b-none">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Order ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Cell</th>
                            <th>Amount</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach( $all_order as $order )

                            <tr>
                                <td>{{ $loop -> index + 1 }}</td>
                                <td>{{  $order -> id }}</td>
                                <td>{{  $order -> name }}</td>
                                <td>{{  $order -> email}}</td>
                                <td>{{  $order -> cell}}</td>
                                <td>{{  $order -> total_amount}}</td>
                                <td>{{  $order -> payment_system }}</td>
                                <td>{{  $order -> order_status }}</td>
                                <td>
                                    
                                    @if( $order -> order_status == 'Pending' )
                                         <a class="btn btn-success btn-sm" href="{{ route('order.complete', $order -> id ) }}">Complete Order</a>
                                    @else 
                                        
                                         <a class="btn btn-warning btn-sm" href="{{ route('order.pending', $order -> id ) }}">Pending Order</a>

                                    @endif

                                   



                                    <a class="btn btn-danger btn-sm" href="{{ route('order.delete', $order -> id ) }}">Delete</a>
                                </td>
                            </tr>

                        @endforeach
                
                   

                        
                    </tbody>
                </table>
            </section>


        </div>

    </div>

@endsection