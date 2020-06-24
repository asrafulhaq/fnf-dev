<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Slider;

class SliderManagement extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Slider::latest() -> get();
        return view('admin.slider.index', [
            'all_slides'    => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         * Post validate 
         */
        $this -> validate($request, [
            'slide_image'          => 'required',

        ],[
            'slide_image.required' => 'Slide Image  is required ! ',
        ]);


        if ( $request -> status == 'Published' ) {
            $status = "Published";
        }else {
            $status = "Unpublished";
        }

        if ( $request -> hasFile('slide_image') ) {
            
           $img = $request -> file('slide_image');

           $unique_name = md5(time() . rand()).".". $img -> getClientOriginalExtension();

           $img -> move(public_path('media/slider'), $unique_name);

        }

        Slider::create([
            'slide_img'   => $unique_name,
            'status'   => $status,
        ]);

        return redirect() -> route('home-slider.index') -> with('success', 'Slide Image added successful !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Slider::find($id);

        $data -> delete();

        return redirect() -> route('home-slider.index') -> with('success', 'Slide Image Deleted successful !');

    }
}
