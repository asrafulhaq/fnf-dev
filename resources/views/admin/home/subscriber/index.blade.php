@extends('admin.layouts.app')


@section('dash-title','All Subscribers')
@section('user','Fish n Food')
@section('user-location','Dhaka')

@section('dash-page-content')
    
    <div class="row">        
        <div class="col-sm-12">
            
            
            <br>
            <br>
            <section class="panel panel-default">
                <header class="panel-heading">  All SSubsribers </header>
                <table class="table table-striped m-b-none">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach( $all_subs as $slide )
                        <tr>
                            <td>{{ $loop -> index + 1 }}</td>
                            <td>{{ $slide -> email }}</td>
                            <td>
                               <form action="{{ route('offer-slider.destroy', $slide -> id ) }}" method="POST">
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