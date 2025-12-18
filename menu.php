<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <a class="navbar-brand d-flex align-items-center" href="index.php">
 

  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"/>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container">
  <a class="navbar-brand d-flex align-items-center" href="menu.php">
  <img src="images/logo.jpeg"
       alt="WE CRUNCH Logo"
       width="45"
       height="45"
       class="me-2 rounded-circle">
  <span class="fw-bold text-white">WE CRUNCH!</span>
</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link active" href="menu.php">Menu</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Menu Section -->
<section class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="mb-5">Our Delicious Menu</h2>

    <div class="row g-4">

      <!-- Pasta -->
      <div class="col-md-4">
        <div class="card h-100 shadow">
          <img src="images/authentic-italian-pasta-sauce-3.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Creamy Pasta</h5>
            <p class="card-text">Authentic Italian white sauce pasta.</p>
            <p class="text-danger fw-bold">₹220</p>
            <form action="payment.php" method="POST">
              <input type="hidden" name="product" value="Creamy Pasta">
              <input type="hidden" name="amount" value="220">
              <button type="submit" class="btn btn-primary">Buy Now</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Burger -->
      <div class="col-md-4">
        <div class="card h-100 shadow">
          <img src="images/burger.jpeg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Grilled Burger</h5>
            <p class="card-text">Juicy grilled burger with cheese.</p>
            <p class="text-danger fw-bold">₹180</p>
            <form action="payment.php" method="POST">
              <input type="hidden" name="product" value="Grilled Burger">
              <input type="hidden" name="amount" value="180">
              <button type="submit" class="btn btn-primary">Buy Now</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Chicken Nuggets -->
      <div class="col-md-4">
        <div class="card h-100 shadow">
          <img src="images/Baked-Chicken-Nuggets-15.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Chicken Nuggets</h5>
            <p class="card-text">Crispy baked chicken nuggets.</p>
            <p class="text-danger fw-bold">₹200</p>
            <form action="payment.php" method="POST">
              <input type="hidden" name="product" value="Chicken Nuggets">
              <input type="hidden" name="amount" value="200">
              <button type="submit" class="btn btn-primary">Buy Now</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Biryani -->
      <div class="col-md-4">
        <div class="card h-100 shadow">
          <img src="images/biriyani.jpeg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Chicken Biryani</h5>
            <p class="card-text">Traditional spicy chicken biryani.</p>
            <p class="text-danger fw-bold">₹280</p>
            <form action="payment.php" method="POST">
              <input type="hidden" name="product" value="Chicken Biryani">
              <input type="hidden" name="amount" value="280">
              <button type="submit" class="btn btn-primary">Buy Now</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Dosa -->
      <div class="col-md-4">
        <div class="card h-100 shadow">
          <img src="images/dosa.jpeg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Masala Dosa</h5>
            <p class="card-text">South Indian crispy dosa.</p>
            <p class="text-danger fw-bold">₹120</p>
            <form action="payment.php" method="POST">
              <input type="hidden" name="product" value="Masala Dosa">
              <input type="hidden" name="amount" value="120">
              <button type="submit" class="btn btn-primary">Buy Now</button>
            </form>
          </div>
        </div>
      </div>
<!-- Paneer Butter Masala -->
<div class="col-md-4">
  <div class="card h-100 shadow">
    <img src="images/paneer.jpg" class="card-img-top" alt="Paneer Butter Masala">
    <div class="card-body">
      <h5 class="card-title">Paneer Butter Masala</h5>
      <p class="card-text">Rich & creamy paneer curry.</p>
      <p class="text-danger fw-bold">₹240</p>

      <form action="payment.php" method="POST">
        <input type="hidden" name="product" value="Paneer Butter Masala">
        <input type="hidden" name="amount" value="240">
        <button type="submit" class="btn btn-primary">Buy Now</button>
      </form>
    </div>
  </div>
</div>
<!-- Fresh Veg Salad -->
<div class="col-md-4">
  <div class="card h-100 shadow">
    <img src="images/salad.jpeg" class="card-img-top" alt="Fresh Veg Salad">
    <div class="card-body">
      <h5 class="card-title">Fresh Veg Salad</h5>
      <p class="card-text">Healthy mixed vegetable salad.</p>
      <p class="text-danger fw-bold">₹130</p>

      <form action="payment.php" method="POST">
        <input type="hidden" name="product" value="Fresh Veg Salad">
        <input type="hidden" name="amount" value="130">
        <button type="submit" class="btn btn-primary">Buy Now</button>
      </form>
    </div>
  </div>
</div>

      <!-- Ice Cream -->
      <div class="col-md-4">
        <div class="card h-100 shadow">
          <img src="images/icecream.png" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Ice Cream</h5>
            <p class="card-text">Cold & creamy dessert.</p>
            <p class="text-danger fw-bold">₹150</p>
            <form action="payment.php" method="POST">
              <input type="hidden" name="product" value="Ice Cream">
              <input type="hidden" name="amount" value="150">
              <button type="submit" class="btn btn-primary">Buy Now</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Noodles -->
      <div class="col-md-4">
        <div class="card h-100 shadow">
          <img src="images/noodles.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Veg Noodles</h5>
            <p class="card-text">Hot & spicy noodles.</p>
            <p class="text-danger fw-bold">₹170</p>
            <form action="payment.php" method="POST">
              <input type="hidden" name="product" value="Veg Noodles">
              <input type="hidden" name="amount" value="170">
              <button type="submit" class="btn btn-primary">Buy Now</button>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

</body>
</html>
