<?php
// Include database connection
include 'db.php';

// Fetch all orders
$sql = "SELECT * FROM orders ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Order List - WE CRUNCH</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"/>
</head>
<body>
  <div class="container mt-5">
    <h2 class="mb-4">Customer Orders</h2>
    
    <?php if ($result->num_rows > 0): ?>
      <table class="table table-bordered">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Product</th>
            <th>Amount (₹)</th>
            <th>Transaction ID</th>
            <th>Status</th>
            <th>Ordered At</th>
          </tr>
        </thead>
        <tbody>
          <?php while($row = $result->fetch_assoc()): ?>
            <tr>
              <td><?= $row['id']; ?></td>
              <td><?= $row['product_name']; ?></td>
              <td><?= $row['amount']; ?></td>
              <td><?= $row['txn_id']; ?></td>
              <td><?= $row['payment_status']; ?></td>
              <td><?= $row['created_at']; ?></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    <?php else: ?>
      <p class="text-danger">No orders found.</p>
    <?php endif; ?>

  </div>
</body>
</html>
