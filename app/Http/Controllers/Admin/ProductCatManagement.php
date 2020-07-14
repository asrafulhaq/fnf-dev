<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Model\Category;

class ProductCatManagement extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Category::latest() -> get();
        return view('admin.product.category.index', [
            'all_cat'   => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.category.create');
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
            'cat_name'          => 'required',

        ],[
            'cat_name.required'     => 'Product Category name is required ! ',
        ]);



        if ( $request -> status == 'Published' ) {
            $status = "Published";
        }else {
            $status = "Unpublished";
        }


        if ( $request -> hasFile('cat_icon_img') ) {
            
           $img = $request -> file('cat_icon_img');

           $unique_name = md5(time() . rand()).".". $img -> getClientOriginalExtension();

           $img -> move(public_path('media/products/cat'), $unique_name);

        }else {
            $unique_name = '';
        }


        Category::create([
            'name'      => $request -> cat_name,
            'slug'      => Str::slug($request -> cat_name),
            'sub_cat'   => '' ,
            'icon'      => $request -> cat_icon ,
            'icon_img'  => $unique_name,
            'status'    => $status
        ]);


        return redirect() -> back() -> with('success', 'Product category added successful !');




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
        $data = Category::find($id);
        return view('admin.product.category.edit',  [
            'single_product'    => $data
        ]);
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
        /**
         * Post validate 
         */
        $this -> validate($request, [
            'cat_name'          => 'required',

        ],[
            'cat_name.required'     => 'Product Category name is required ! ',
        ]);

        if ( $request -> hasFile('new_img') ) {
            
            $img = $request -> file('new_img');

            $unique_name = md5(time() . rand()).".". $img -> getClientOriginalExtension();

            $img -> move(public_path('media/products/cat'), $unique_name);

        }else {
            $unique_name = $request -> old_img;
        }

        if ( $request -> status == 'Published' ) {
            $status = "Published";
        }else {
            $status = "Unpublished";
        }

        $data = Category::find($id);
        $data -> name = $request -> cat_name;
        $data -> slug = Str::slug($request -> cat_name);
        $data -> sub_cat = '';
        $data -> icon = $request -> cat_icon;
        $data -> icon_img = $unique_name;
        $data -> status =  $status;
        $data -> update();
       

        return redirect() -> back() -> with('success', 'Product category Updated successful !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Category::find($id);
        $data -> delete();
         return redirect() -> back() -> with('success', 'Product category deleted successful !');
    }
}
