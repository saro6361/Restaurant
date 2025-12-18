<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>WE CRUNCH - Contact</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"/>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container">
  <a class="navbar-brand d-flex align-items-center" href="contact.php">
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
        <li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5">Contact & Reservation</h2>
    <div class="row">
      <div class="col-md-6">
        <h5>Send Us a Message</h5>

        <form action="contact_process.php" method="POST">
          <div class="mb-3">
            <label class="form-label">Your Name</label>
            <input type="text" name="name" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Message</label>
            <textarea name="message" rows="4" class="form-control" required></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Send Message</button>
        </form>

      </div>

      <div class="col-md-6">
  <h5>Visit Us</h5>
  <p>📍 Krishnagiri, Tamil Nadu</p>
  <p>📞 +91 7806882465</p>
  <p>✉️ support@wecrunch.com</p>

  <!-- Google Map -->
  <div class="mt-3">
    <iframe
      src="https://www.google.com/maps?q=Krishnagiri,Tamil+Nadu&output=embed"
      width="100%"
      height="300"
      style="border:0;"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</div>

    </div>
  </div>
</section>

<footer class="text-center bg-dark text-white py-4">
  <p class="mb-0">&copy; 2025 WE CRUNCH. All Rights Reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
