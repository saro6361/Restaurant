<?php
// menu.php la irundhu POST vandhiruka nu check
if (!isset($_POST['amount']) || !isset($_POST['product'])) {
    header("Location: menu.php");
    exit;
}

$amount  = $_POST['amount'];   // eg: 250
$product = $_POST['product'];  // eg: Italian Pizza
?>
<!DOCTYPE html>
<html>
<head>
    <title>Payment</title>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>

<h2>Processing Payment...</h2>

<script>
var options = {
    "key": "rzp_test_RsdIt62Dm16srZ",   // Razorpay TEST key
    "amount": <?= $amount * 100 ?>,    // ₹ to paise
    "currency": "INR",
    "name": "WE CRUNCH",
    "description": "<?= $product ?>",

    "handler": function (response) {
        window.location.href =
          "payment_success.php?payment_id=" + response.razorpay_payment_id;
    },

    "theme": {
        "color": "#3399cc"
    }
};

// AUTO open Razorpay (no Pay button needed)
var rzp1 = new Razorpay(options);
rzp1.open();
</script>

</body>
</html>
