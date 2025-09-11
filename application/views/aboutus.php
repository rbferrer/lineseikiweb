<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Line Seiki Asia Pacific</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    /* Navbar */
    .navbar {
      background: linear-gradient(90deg, #0d1b2a, #1b263b);
      padding: 0.8rem 5%;
    }
    .navbar-nav .nav-link {
      color: #fff;
      font-weight: 500;
      transition: color 0.3s ease;
    }
    .navbar-nav .nav-link:hover {
      color: #ffd60a;
    }
    .dropdown-menu {
      background-color: #1b263b;
      border: none;
      border-radius: 8px;
    }
    .dropdown-menu a {
      color: #fff;
    }
    .dropdown-menu a:hover {
      background-color: #ffd60a;
      color: #000;
    }
    .navbar-brand img {
      height: 40px;
      width: auto;
    }
    .dropdown-submenu {
      position: relative;
    }
    .dropdown-submenu > .dropdown-menu {
      top: 0;
      left: 100%;
      margin-top: -0.1rem;
    }

    /* Section styles */
    section {
      padding: 80px 0;
    }
    .section-white {
      background: #fff;
      color: #333;
    }
    .section-navy {
      background: #0a192f;
      color: #e0e1dd;
    }
    .section-navy h2 {
      color: #ffd60a;
    }

    /* Headers */
    h1, h2 {
      font-weight: bold;
      margin-bottom: 20px;
    }

    /* Partner logos */
    .partner-logos img {
      max-height: 80px;
      margin: 20px;
      filter: grayscale(0%);
      transition: 0.3s;
    }
    .partner-logos img:hover {
      filter: grayscale(0%);
      transform: scale(1.05);
    }

    /* Buttons */
    .btn-primary {
      background-color: #0077b6;
      border: none;
      transition: all 0.3s ease;
    }
    .btn-primary:hover {
      background-color: #023e8a;
    }

    /* Footer */
    footer {
      background-color: #0d1b2a;
      color: white;
      padding: 60px 10%;
    }
    footer h2 {
      color: #ffd60a;
    }
    footer a {
      color: #ffd60a;
      text-decoration: none;
    }
    footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <!-- ✅ Fixed Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">
      <!-- Logo on the LEFT -->
      <a class="navbar-brand" href="#">
        <img src=<?= base_url('assets_system/images/header_logo.png') ?> alt="Line Seiki Logo">
      </a>

      <!-- Toggler for mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navigation items -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
          <li class="nav-item"><a class="nav-link active" href="<?= base_url('index/about_us') ?>">About Us</a></li>

          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href=" " id="navbarDropdown" role="button" data-bs-toggle="dropdown">
              Product and Services
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?= base_url('index/ps_prod') ?>">Products</a></li>

              <!-- Submenu -->
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">Services</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?= base_url('index/ps_serv_simulation') ?>">Simulation Analysis</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('index/ps_serv_silicone') ?>">Silicone Molding & Urethane Casting</a></li>
                </ul>
              </li>

              <li><a class="dropdown-item" href="<?= base_url('index/ps_iotsolution') ?>">IoT Solution</a></li>
            </ul>
          </li>

          <li class="nav-item"><a class="nav-link" href="<?= base_url('index/news_event') ?>">News and Events</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= base_url('index/library') ?>">Library</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= base_url('index/contact_us') ?>">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Spacer for fixed navbar -->
  <div style="height: 70px;"></div>

  <!-- Header Section -->
  <section class="section-white text-center">
    <div class="container">
      <h1>About Line Seiki Asia Pacific</h1>
      <p class="lead">
        Line Seiki Asia Pacific serves as the dedicated sales arm of Line Seiki, delivering 
        innovative measuring instruments and industrial solutions.  
        We proudly support industries across the region with precision technology and trusted expertise.
      </p>
    </div>
  </section>

  <!-- Mission and Vision -->
  <section class="section-navy text-center">
    <div class="container">
      <h2>Mission and Vision</h2>
      <p class="mb-4">
        <strong>Mission:</strong> To provide innovative, reliable, and cost-effective measurement and monitoring solutions 
        that empower businesses to operate with precision and efficiency.  
      </p>
      <p>
        <strong>Vision:</strong> To be recognized as a global leader in measurement technology, trusted for excellence, 
        innovation, and commitment to customer success.
      </p>
    </div>
  </section>

  <!-- Partner / Association Logos -->
  <section class="section-white text-center">
    <div class="container">
      <h2>Our Partners and Associations</h2>
      <div class="d-flex justify-content-center flex-wrap partner-logos">
        <img src=<?= base_url('assets_system/images/macos.png') ?> alt="Partner 1">
        <img src=<?= base_url('assets_system/images/microsoft.jpg') ?> alt="Partner 2">
        <img src=<?= base_url('assets_system/images/burgerking.png') ?> alt="Partner 3">
        <img src=<?= base_url('assets_system/images/abscbn.png') ?> alt="Partner 4">
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="section-navy text-center">
    <div class="container">
      <h2>Get in Touch</h2>
      <p class="mb-4">
        Interested in our products or services? Connect with us today and let’s build solutions together.  
      </p>
      <a href="contact.html" class="btn btn-primary btn-lg">Contact Us</a>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container text-center">
      <h2>Line Seiki Asia Pacific</h2>
      <p>© 2025 Line Seiki Asia Pacific. All rights reserved.</p>
      <p><a href="privacy.html">Privacy Policy</a> | <a href="terms.html">Terms of Service</a></p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Submenu JS -->
  <script>
    document.addEventListener("DOMContentLoaded", function(){
      document.querySelectorAll('.dropdown-submenu > a').forEach(function(element){
        element.addEventListener('click', function(e){
          e.preventDefault();
          e.stopPropagation();

          let submenu = this.nextElementSibling;

          if(submenu){
            submenu.classList.toggle('show');
          }

          // close other open submenus
          this.closest('.dropdown-menu').querySelectorAll('.show').forEach(function(openMenu){
            if(openMenu !== submenu){
              openMenu.classList.remove('show');
            }
          });
        });
      });

      // close all on click outside
      document.addEventListener('click', function(){
        document.querySelectorAll('.dropdown-menu .show').forEach(function(openMenu){
          openMenu.classList.remove('show');
        });
      });
    });
  </script>

</body>
</html>
