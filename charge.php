


 <?php 
//   require_once(dirname(__FILE__) . '/config.php');

require_once 'lib/Stripe.php';
include "config.php";

  $token  = $_POST['stripeToken'];

 try {
 	$customer = Stripe_Customer::create(array(
 			'email' => 'saggarwal1@seasiainfotech.com',
 			'card'  => $token
 	));
 	
 	$charge = Stripe_Charge::create(array(
 			'customer' => $customer->id,
 			'amount'   => 5000,
 			'currency' => 'usd'
 	));
 	
 	
 	
 	echo '<h1>Successfully charged $50.00!</h1>';
 } catch (Exception $e) {
 	
    echo 'ErrorMsg: ' .$e->getMessage();
 }

  
?>


 <?php 
// require_once 'lib/Stripe.php';

// Stripe::setApiKey("sk_test_6LctfFCyzLcB4RRaG12kVfiu");

// $token="tok_103rxK2eVS1eWkKxO7nG4p9Z";
// if(isset($_POST)) {
	
	
//  try {
 	
//  	$payment = Stripe_Charge::create(array(
 	
//  			'amount'        => $_POST['amount'],
//  			'currency'      => $_POST['currency'],
//  			'card'          => array(
//  					'number'    => $_POST['card'],
//  					'exp_month' => $_POST['emonth'],
//  					'exp_year'  => $_POST['eyear'],
//  					'cvc'       => $_POST['eCvv']
//  			),
//  			'description'   => $_POST['description']
 	
//  	)
//  	);
//  	print_r($payment);
 	
//  } catch (Stripe_Error $e) {
 	
//  	print_r($e);
//  }

// }
// ?>




