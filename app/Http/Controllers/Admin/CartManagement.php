<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Cart;
use App\Model\Product;

class CartManagement extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Cart::where('user_ip', request() -> ip() ) -> latest() -> get();
              return view('frontend.cart', [
                  'cart_details'      => $data
              ]) -> with('success','Product added to cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $product_id = $request -> pid;     

        $product_data =  Product::find($product_id);
        

       $cart = Cart::where('user_ip', request() -> ip() ) -> where('product_name',  $product_data -> name) -> first();

       if ( !is_null($cart) ) {
           $cart -> product_amount = ( $cart -> product_quantity + $request -> pquantity ) * $product_data -> regular_price ;
           $cart -> product_quantity = ( $cart -> product_quantity + $request -> pquantity );
           $cart -> update();
       }else {
            Cart::create([
                 'user_ip'   => request() -> ip(),
                 'product_photo'     => $product_data -> product_image,
                 'product_name'      => $product_data -> name,
                 'product_price'     => $product_data -> regular_price,
                 'product_quantity'  => $request -> pquantity,
                 'product_amount'    => ( $product_data -> regular_price *  $request -> pquantity ),
            ]);
       }

       


       return redirect('/cart') ;
      



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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $data = Cart::find($id);
         $data -> delete();

         return back();
    }
}
