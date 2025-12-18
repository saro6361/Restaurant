<?php
include "db.php";

$payment_id = $_GET['payment_id'] ?? '';

if ($payment_id == '') {
    die("Payment Failed ❌");
}

$product = "Burger Combo";
$amount  = 500;
$status  = "Success";

$stmt = $conn->prepare(
  "INSERT INTO orders (product_name, amount, txn_id, payment_status)
   VALUES (?, ?, ?, ?)"
);
$stmt->bind_param("siss", $product, $amount, $payment_id, $status);
$stmt->execute();

echo "<h2>✅ Payment Successful</h2>";
echo "<p>Payment ID: $payment_id</p>";
?>
