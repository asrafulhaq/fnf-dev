<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Model\Product;
use App\Model\ProductCat;

class ProductManagement extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Product::latest() -> get();
        return view('admin.product.index', [
            'all_product'   => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data = ProductCat::all();
        return view('admin.product.create', [
            'all_cat'   => $data
        ]);
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
            'product_name'          => 'required',
            'regular_price'         => 'required',
            'desc'                  => 'required',

        ],[
            'product_name.required' => 'Product name is required ! ',
            'regular_price.required' => 'Regular price is required ! ',
            'desc.required'         => 'Product description is required ! ',
        ]);


        if ( $request -> status == 'Published' ) {
            $status = "Published";
        }else {
            $status = "Unpublished";
        }



        $product_cat = $request -> product_cat;

        $product_cat_string =  json_encode($product_cat);

        if ( $request -> hasFile('product_image') ) {
            
           $img = $request -> file('product_image');

           $unique_name = md5(time() . rand()).".". $img -> getClientOriginalExtension();

           $img -> move(public_path('media/products'), $unique_name);

        }

        $product = Product::create([
            'name'              => $request -> product_name,
            'slug'              => Str::slug($request -> product_name),
            'categories'        => $product_cat_string,
            'regular_price'     => $request -> regular_price,
            'sale_price'        => $request -> sale_price,
            'shiping_cost'      => $request -> shipping_cost,
            'stock'             => $request -> stock,
            'desc'              => $request -> desc,
            'product_image'     => $unique_name,
            'product_gallery'   => '',
            'status'            => $status,
        ]);


        


        return redirect() -> back() -> with('success', 'Product added successful !');


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
        $data = Product::find($id);
        $cat_data = ProductCat::all();
        return view('admin.product.edit', [
            'single_product'        => $data,
            'categories'            => $cat_data
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
            'product_name'          => 'required',
            'regular_price'         => 'required',
            'desc'                  => 'required',

        ],[
            'product_name.required' => 'Product name is required ! ',
            'regular_price.required' => 'Regular price is required ! ',
            'desc.required'         => 'Product description is required ! ',
        ]);


        if ( $request -> status == 'Published' ) {
            $status = "Published";
        }else {
            $status = "Unpublished";
        }



        $product_cat = $request -> product_cat;

        $product_cat_string =  json_encode($product_cat);



        if ( $request -> hasFile('product_image') ) {


           $img = $request -> file('product_image');

           $unique_name = md5(time() . rand()).".". $img -> getClientOriginalExtension();

           $img -> move(public_path('media/products'), $unique_name);

           unlink('public/media/products/' . $request -> old_photo );

        }else{

            $unique_name  = $request -> old_photo;
        }

        $product_update = Product::find($id);
        $product_update -> name = $request -> product_name;
        $product_update -> categories = $product_cat_string;
        $product_update -> regular_price = $request -> regular_price;
        $product_update -> sale_price = $request -> sale_price;
        $product_update -> shiping_cost = $request -> shipping_cost;
        $product_update -> stock = $request -> stock;
        $product_update -> status = $status;
        $product_update -> product_image =  $unique_name;
        $product_update -> desc =  $request -> desc;
        $product_update -> update();


        return redirect() -> back() -> with('success', 'Product updated successful !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::findOrFail($id);
        $data -> delete();

        return redirect() -> route('product.index') -> with('success', 'Product deleted successful !');
    }
}
