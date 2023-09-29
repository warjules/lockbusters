<?php

     require_once('vendor/autoload.php');

  \Stripe\Stripe::setApiKey('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');
  $stripe = new \Stripe\StripeClient('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');

// Retrieve the data sent from JavaScript
$customer_id = $_POST['customer_id'];
$setup_id = $_POST['setup_id'];
$amount = $_POST['today_amount'];
$cycles = $_POST['cycles'];
$sub_amount = $_POST['sub_amount'];
$customer_name = $_POST['customer_name'];
$customer_last_name = $_POST['customer_last_name'];
$country = $_POST['country'];
$country_code = $_POST['country_code'];
$street_address = $_POST['street_address'];
$city = $_POST['city'];
$postal_code = $_POST['postal_code'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$company_name = $_POST['company_name'];
$day= $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];

$dateString = "$day-$month-$year";

$timestamp = strtotime($dateString);


try{
        //creating Products for customers 

  $prod = $stripe->products->create([
                    'name' => "Recurring/mo",
                                        ]);

  $prod_id = $prod->id;

    $sub_price =  $stripe->prices->create([
                                'unit_amount' => $sub_amount*100,
                                'currency' => 'eur',
                                'recurring' => ['interval' => 'month'],
                                'product' => $prod_id,

                              ]);
    $sub_price_id = $sub_price->id;
                  

$setup  =   $stripe->setupIntents->retrieve(
                                                $setup_id,
                                                []
                                              );

            $payment_method = $setup->payment_method; 
   

			
		$customer_object = \Stripe\Customer::update(
                      							 $customer_id,
                      							 ['name' =>  $customer_name,
                      							  'email' => $email,
      'invoice_settings' => ['default_payment_method' => $payment_method],
                    'address' => ['line1' => $street_address],
                  ['metadata' => ['country' => $country,
                                  'country_code'=> $country_code, 
                                  'city' => $city, 
                                  'postal_code' => $postal_code, 
                                  'phone' => $phone, 
                                  'company_name' => $company_name,
                                   'today_amount'=>$amount,
                                   'cycles'=>$cycles,
                                    'sub_amount'=>$sub_amount,
                                    'date'=>$timestamp,
                                    'date_string'=>$dateString,
                                                            ]]
                                  
                                                     ]
                      							);

if ($amount > 0) {
 $one_time_charge =   $stripe->paymentIntents->create([

                                'customer'=>$customer_id,
                                'amount' => $amount*100,
                                'currency' => 'eur',
                                'confirm' => true,
                                'payment_method'=>$payment_method,
               'payment_method_types'=>['sepa_debit']                 
                                
                              ]);

}else{

  echo"Good To Go...";
}

    $sub_schedule = $stripe->subscriptionSchedules->create([
                                    'customer' => $customer_id,
                                    'start_date' => $timestamp,
                                    'end_behavior' => 'cancel',
                                    'phases' => [
                                      [
                                        'items' => [
                                          [
                                            'price' => $sub_price_id,
                                            'quantity' => 1,
                                          ],
                                        ],
                                        'iterations' => $cycles,
                                      ],
                                    ],
                                  ]);

$sub_schedule_id = $sub_schedule->id;

      echo "$sub_schedule->status";

     }
    catch (Exception $e) {
    $error = [
        'error' => true,
        'message' => $e->getMessage(),
        'code' => $e->getCode(),
    ];

    echo json_encode($error);
}                           
               

               
?>