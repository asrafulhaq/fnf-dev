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



        // if you have order id generated catch the order_id key and query in your database. otherwise pass json data to postdata key of button to catch here

        /** $post_data = array();
        $post_data['store_id'] = "fishnfoodlive";
        $post_data['store_passwd'] = "Fish@Food976kn";
        $post_data['total_amount'] = "50";
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = "your unique order id".uniqid();
        $post_data['success_url'] = "your payment application success url";
        $post_data['fail_url'] = "your payment application fail url";
        $post_data['cancel_url'] = "your payment application cancel url";

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = "";
        $post_data['cus_email'] = "";
        $post_data['cus_add1'] = "Dhaka";
        $post_data['cus_add2'] = "Dhaka";
        $post_data['cus_city'] = "Dhaka";
        $post_data['cus_state'] = "Dhaka";
        $post_data['cus_postcode'] = "1000";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = '';
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1 '] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_country'] = "Bangladesh";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b '] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";

        # EMI STATUS
        $post_data['emi_option'] = "1";

        # CART PARAMETERS
        $post_data['cart'] = json_encode(array(
            array("product"=>"DHK TO BRS AC A1","amount"=>"200.00"),
            array("product"=>"DHK TO BRS AC A2","amount"=>"200.00"),
            array("product"=>"DHK TO BRS AC A3","amount"=>"200.00"),
            array("product"=>"DHK TO BRS AC A4","amount"=>"200.00")
        ));
        $post_data['product_amount'] = "100";
        $post_data['vat'] = "5";
        $post_data['discount_amount'] = "5";
        $post_data['convenience_fee'] = "3";


        //$post_data['allowed_bin'] = "3,4";
        //$post_data['allowed_bin'] = "470661";
        //$post_data['allowed_bin'] = "470661,376947";


        # REQUEST SEND TO SSLCOMMERZ
        $direct_api_url = "https://securepay.sslcommerz.com/gwprocess/v4/api.php";

        $handle = curl_init();
        curl_setopt($handle, CURLOPT_URL, $direct_api_url );
        curl_setopt($handle, CURLOPT_TIMEOUT, 30);
        curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($handle, CURLOPT_POST, 1 );
        curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, FALSE); # KEEP IT FALSE IF YOU RUN FROM LOCAL PC


        $content = curl_exec($handle );

        $code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

        if($code == 200 && !( curl_errno($handle))) {
            curl_close( $handle);
            $sslcommerzResponse = $content;
        } else {
            curl_close( $handle);
            echo "FAILED TO CONNECT WITH SSLCOMMERZ API";
            exit;
        }

        # PARSE THE JSON RESPONSE
        $sslcz = json_decode($sslcommerzResponse, true );

        //var_dump($sslcz); exit;

        if(isset($sslcz['GatewayPageURL']) && $sslcz['GatewayPageURL']!="") {
            // this is important to show the popup, return or echo to sent json response back
           return  json_encode(['status' => 'success', 'data' => $sslcz['GatewayPageURL'], 'logo' => $sslcz['storeLogo'] ]);
        } else {
           return  json_encode(['status' => 'fail', 'data' => null, 'message' => "JSON Data parsing error!"]);
        }







        /**
       //   * Post validate 
       //   */
        $this -> validate($request, [
            'customer_name'             => 'required',
            'customer_cell'             => 'required',

        ]);


        $data = Order::create([
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



       $cart_data = Cart::where('user_ip', request() -> ip() ) -> get();
        
       foreach($cart_data as $cart_id ){

           $delete_data =  Cart::find($cart_id -> id );
           $delete_data -> delete();

       }
       

       return view('frontend.invoice', [
            'order_data'    => $data
       ]);









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
