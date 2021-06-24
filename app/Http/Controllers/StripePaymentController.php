<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use Session;
use Stripe;
   
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {


        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));


        $customer = \Stripe\Customer::create(array(
        'email' => "mnaveed30@gmail.com",
        "source" => $request->stripeToken
    ));    
    // item details for which payment made
    $itemName = "Plan 1";
    $itemNumber = "123";
    $itemPrice = "200";
    $currency = "usd";
    $orderID = "SKA987654321";
    $planInterval = "month"; 

    // create plan
    $plan = \Stripe\Plan::create(array( 
                "product" => [ 
                    "name" => "Monthly Subcription" 
                ], 
                "amount" => "200", 
                "currency" => "usd", 
                "interval" => "month", 
                "interval_count" => 1 
            )); 

    // create subcription 
    $subscription = \Stripe\Subscription::create(array( 
                    "customer" => $customer->id, 
                    "items" => array( 
                        array( 
                            "plan" => $plan->id, 
                        ), 
                    ), 
                )); 


        Session::flash('success', 'Payment successful!');
          
        return back();
    }
}