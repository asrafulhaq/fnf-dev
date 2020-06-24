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
        $data = Cart::find($id);


        $data -> product_quantity = $request -> quan_items;
        $data -> product_price = $data -> product_price;
        $data -> product_amount = ($request -> quan_items * $data -> product_price ) ;

        $data -> update();

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

    public function cartLoad()
    {
       
        $data = Cart::where('user_ip', request() -> ip() ) -> latest() -> get();
        ?>
        <div class="cart">
            <div class="cart-items">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    
                    <?php  

                        $total_price_final = 0;
                        foreach($data as $cart) :

                            $total_price = $cart -> product_amount;
                            $total_price_final += $total_price; 
                    ?>
                    
                    <tr>
                        <td><a style="color:red;" id="cart_del_item" del="<?php echo  $cart -> id ?>" href="#"><i class="ti-close"></i></a></td>
                        <td><img style="width: 50px;height:50px;" src="public/media/products/<?php echo  $cart -> product_photo ?>" alt=""></td>
                        <td><?php echo $cart ->  product_name; ?></td>
                        <td><input items_id="<?php echo $cart -> id ?>" id="cart_item_num" type="number" value="<?php echo $cart -> product_quantity; ?>"></td>
                        <td><?php echo $cart -> product_price; ?></td>
                        <td><?php echo $cart -> product_amount; ?></td>
                    </tr>
                    
                    <?php endforeach; ?>

                    <tr>
                        <td colspan="5" class="text-right">Total Price : </td>
                        <td>
                            <?php 
                                echo $total_price_final;
                            ?>
                        </td>
                    </tr>

                </table>
            </div>
            <div class="cart-info">
                <a class="btn btn-info" href="shop">Continue Shop</a> 
            </div>
        </div>

        <?php 


    }
}
