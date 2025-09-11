<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Line Seiki Asia Pacific</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      background-color: #fff;
      color: #333;
      font-family: Arial, Helvetica, sans-serif;
      line-height: 1.6;
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

    /* Sections */
    section {
      padding: 80px 0;
    }
    section img {
      width: 100%;
      border-radius: 12px;
    }
    section h1, section h2 {
      font-size: 2.5rem;
      margin-bottom: 20px;
      color: #ffd60a;
    }
    section p {
      margin-bottom: 20px;
    }

    /* Color schemes */
    .section-white {
      background: #fff;
      color: #333;
    }
    .section-navy {
      background: #0a192f;
      color: #e0e1dd;
    }
    .section-navy h1, 
    .section-navy h2 {
      color: #ffd60a;
    }

    /* Buttons */
    .btn-primary {
      background-color: #0077b6;
      border: none;
      transition: all 0.3s ease;
    }
    .btn-primary:hover {
      background-color: #023e8a;
      transform: translateY(-2px);
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }
    .btn-secondary {
      background: transparent;
      border: 1px solid #ffd60a;
      color: #ffd60a;
      transition: all 0.3s ease;
    }
    .btn-secondary:hover {
      background: #ffd60a;
      color: #000;
    }
    .btn-explore {
      background: transparent;
      border: 1px solid #0077b6;
      color: #0077b6;
      transition: all 0.3s ease;
    }
    .btn-explore:hover {
      background: #0077b6;
      color: #fff;
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
    footer .links a {
      color: #fff;
      text-decoration: none;
      margin-right: 20px;
    }
    footer .links a:hover {
      text-decoration: underline;
      color: #ffd60a;
    }
    footer .socials a {
      color: white;
      margin-right: 15px;
      font-size: 1.3rem;
      transition: color 0.3s;
    }
    footer .socials a:hover {
      color: #ffd60a;
    }
    footer .bottom {
      margin-top: 20px;
      font-size: 0.85rem;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
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
        <li class="nav-item"><a class="nav-link active" href="index">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about_us">About Us</a></li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
            Product and Services
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="ps_prod">Products</a></li>

            <!-- Submenu -->
            <li class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="#">Services</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="ps_serv_simulation">Simulation Analysis</a></li>
                <li><a class="dropdown-item" href="ps_serv_silicone">Silicone Molding & Urethane Casting</a></li>
              </ul>
            </li>

            <li><a class="dropdown-item" href="ps_iotsolution">IoT Solution</a></li>
          </ul>
        </li>

        <li class="nav-item"><a class="nav-link" href="news_event">News and Events</a></li>
        <li class="nav-item"><a class="nav-link" href="library">Library</a></li>
        <li class="nav-item"><a class="nav-link" href="contact_us">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>

  <!-- Offset for fixed navbar -->
  <div style="margin-top:90px"></div>

  <!-- Section 1 (white) -->
  <section class="section-white">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h1>Innovative Solutions for Precision Measurement</h1>
          <p>At Line Seiki Asia Pacific, we specialize in delivering high-quality measuring instruments and smart monitoring systems tailored to your needs.</p>
          <button class="btn btn-primary">Learn More</button>
          <button class="btn btn-secondary">Contact</button>
        </div>
        <div class="col-lg-6">
          <img src=<?= base_url('assets_system/images/home_main.jpg') ?> alt="Section 1">
        </div>
      </div>
    </div>
  </section>

  <!-- Section 2 (navy) -->
  <section class="section-navy">
    <div class="container">
      <div class="row align-items-center flex-row-reverse">
        <div class="col-lg-6">
          <h2>Explore Our Standard Measuring Counters</h2>
          <p>Our standard measuring counters deliver unmatched accuracy and reliability for various industrial applications.</p>
          <button class="btn btn-primary">Learn More</button>
          <button class="btn btn-link text-light"><span>View</span> <i class="fas fa-angle-right"></i></button>
        </div>
        <div class="col-lg-6">
          <img src=<?= base_url('assets_system/images/model.jpg') ?> alt="Section 2">
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3 (white) -->
  <section class="section-white">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h2>Explore Our Comprehensive Engineering and Silicone Molding Services</h2>
          <p>Our engineering services are designed to optimize your projects with precision and innovation.</p>
        </div>
        <div class="col-lg-6">
          <img src=<?= base_url('assets_system/images/model2.jpg') ?> alt="Section 3">
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4 (navy) -->
  <section class="section-navy">
    <div class="container">
      <div class="row align-items-center flex-row-reverse">
        <div class="col-lg-6">
          <h2>Transforming Industries with IoT Solutions</h2>
          <p>Our IoT solutions empower businesses to optimize operations and enhance productivity.</p>
          <button class="btn btn-explore">Explore</button>
          <button class="btn btn-link text-light"><span>Learn More</span> <i class="fas fa-angle-right"></i></button>
        </div>
        <div class="col-lg-6">
          <img src=<?= base_url('assets_system/images/model3.png') ?> alt="Section 4">
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5 (white) -->
  <section class="section-white">
    <div class="container text-center">
      <h2>Discover Our Latest Innovations in Industrial Measurement</h2>
      <p class="mb-4">Explore our newest products designed to enhance efficiency and precision in your operations.</p>
      <img src=<?= base_url('assets_system/images/model4.jpg') ?> alt="Section 5" class="img-fluid rounded">
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
      <h2>Get in Touch with Us</h2>
      <div>
        <button class="btn btn-primary">Contact</button>
        <button class="btn btn-secondary">Consult</button>
      </div>
    </div>
    <p>We’re here to assist with your inquiries and needs.</p>
    <hr class="my-4">
    <div class="d-flex justify-content-between flex-wrap align-items-center">
      <img src=<?= base_url('assets_system/images/header_logo.png') ?> height="40" alt="Logo">
      <div class="links">
        <a href="#">Product Overview</a>
        <a href="#">Engineering Services</a>
        <a href="#">Case Studies</a>
        <a href="#">Latest News</a>
        <a href="#">Contact Us</a>
      </div>
      <div class="socials">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-x-twitter"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
    <div class="bottom mt-4">
      <span>© 2025 Line Seiki Asia Pacific. All rights reserved.</span>
      <a href="#">Privacy Policy</a>
      <a href="#">Terms of Service</a>
      <a href="#">Cookie Settings</a>
    </div>
  </footer>

  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Enable Submenu JS -->
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
