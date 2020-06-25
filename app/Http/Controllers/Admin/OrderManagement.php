<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Cart;
use App\Model\Order;


class OrderManagement extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Cart::where('user_ip', request() -> ip() ) -> latest() -> get();
        return view('frontend.checkout', [
            'checkout_cart' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'customer_name'             => 'required',
            'customer_cell'             => 'required',

        ]);


        Order::create([
            'name'              => $request -> customer_name,
            'cell'              => $request -> customer_cell,
            'email'             => $request -> customer_email,
            'dist'              => $request -> customer_dist,
            'address'           => $request -> customer_address,
            'payment_system'           => $request -> payment,
            'order_status'      =>  'Pending',
            'cart_id'           => '',
            'total_amount'      => $request -> total_amount,
            'customer_ip'      => request() -> ip(),
        ]);

        return redirect() -> back() -> with('success','Thanks for your Order');


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
        //
    }



    public function orderAll()
    {
        $data = Order::latest() -> get();
        return view('admin.orders.index', [
            'all_order' => $data
        ]);
    }



    public function orderComplete($id)
    {
        $data = Order::find($id);
        $data -> order_status = 'Complete';
        $data -> update();


        return redirect() -> back() -> with('success','Order completed successfull');

    }


    public function orderPending($id)
    {
       $data = Order::find($id);
        $data -> order_status = 'Pending';
        $data -> update();


        return redirect() -> back() -> with('success','Order pending successfull');
    }

    public function orderDelete($id)
    {
        $data = Order::find($id);
        $data -> delete();


        return redirect() -> back() -> with('success','Order delete successfull');
 
    }




    public function orderCompleteAll()
    {
        $data = Order::where('order_status','Complete') -> latest() -> get();
        return view('admin.orders.complete', [
            'all_order' => $data
        ]);
    }



    public function orderPendingAll()
    {
        $data = Order::where('order_status','Pending') -> latest() -> get();
        return view('admin.orders.pending', [
            'all_order' => $data
        ]);
    }
    










}
