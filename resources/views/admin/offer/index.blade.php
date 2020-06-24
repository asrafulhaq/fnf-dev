@extends('admin.layouts.app')


@section('dash-title','All offer sliders')
@section('user','Fish n Food')
@section('user-location','Dhaka')

@section('dash-page-content')
    
    <div class="row">        
        <div class="col-sm-12">
            @include('validate');
            <a class="btn btn-primary btn-sm" href="{{ route('offer-slider.create') }}">Add new offer slide</a>
            <br>
            <br>
            <section class="panel panel-default">
                <header class="panel-heading">  All Slides </header>
                <table class="table table-striped m-b-none">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Slide Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach( $all_offers as $slide )
                        <tr>
                            <td>{{ $loop -> index + 1 }}</td>
                            <td><img style="width: 160px;" src="{{ URL::to('/') }}/public/media/offer/{{ $slide -> offer_img }}" alt=""></td>
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