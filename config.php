<?php

require_once 'lib/Stripe.php';

$stripe = array(
  "secret_key"      => "sk_test_6LctfFCyzLcB4RRaG12kVfiu",
  "publishable_key" => "pk_test_39DQEyeNMmAoIiRvBK9lzd0a"
);

Stripe::setApiKey($stripe['secret_key']);
?>

<?php require_once('./config.php'); ?>

<form action="charge.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-amount="5000" data-description="One year's subscription"></script>
</form>