<?php
if (isset($_GET['payment_id']) && isset($_GET['item']) && isset($_GET['price'])) {
    $payment_id = $_GET['payment_id'];
    $item = $_GET['item'];
    $price = $_GET['price'];

    // Display success
    echo "<h2>Payment Successful</h2>";
    echo "Food Ordered: <strong>$item</strong><br>";
    echo "Amount Paid: ₹<strong>$price</strong><br>";
    echo "Your Payment ID: <strong>$payment_id</strong>";

    // ✅ Save to database
    $conn = new mysqli("localhost", "root", "", "restaurant_db");
    if ($conn->connect_error) die("DB error: " . $conn->connect_error);

    $stmt = $conn->prepare("INSERT INTO orders (product_name, amount, txn_id, payment_status) VALUES (?, ?, ?, 'Success')");
    $stmt->bind_param("sis", $item, $price, $payment_id);
    $stmt->execute();
    $stmt->close();
    $conn->close();
} else {
    echo "<h2>Payment Failed</h2>";
}
?>
