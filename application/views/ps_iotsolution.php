<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Iot Solution - Line Seiki Asia Pacific</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      background-color: white;
      color: black;
      line-height: 1.6;
      font-family: Arial, Helvetica, sans-serif;
    }

    /* ✅ Navbar */
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

    /* ✅ Sections */
    section {
      padding: 80px 10%;
    }
    section h2 {
      font-size: 2rem;
      margin-bottom: 20px;
      font-weight: bold;
      color: #0d1b2a;
    }
    section p {
      font-size: 1.05rem;
      margin-bottom: 15px;
    }
    .section-bg {
      background-color: #f8f9fa;
      border-radius: 10px;
      padding: 50px;
    }

    /* ✅ Footer */
    footer {
      background-color: #0a1423;
      color: white;
      padding: 40px 10%;
      font-family: Arial, Helvetica, sans-serif;
    }

    footer h2 {
      color: #ffd60a;
      margin-bottom: 15px;
      font-size: 1.5rem;
    }

    footer p {
      margin: 0 0 20px 0;
      font-size: 0.95rem;
    }

    footer .top {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
      flex-wrap: wrap;
    }

    footer .middle {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      padding: 20px 0;
      border-top: 1px solid #333;
      border-bottom: 1px solid #333;
      margin-bottom: 15px;
    }

    footer .middle img {
      height: 40px;
      width: auto;
    }

    footer .links {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
    }

    footer .links a {
      color: white;
      text-decoration: none;
      font-size: 0.9rem;
    }
    footer .links a:hover {
      text-decoration: underline;
      color: #ffd60a;
    }

    footer .socials {
      display: flex;
      gap: 15px;
      font-size: 1.2rem;
    }
    footer .socials a {
      color: white;
      transition: color 0.3s ease;
    }
    footer .socials a:hover {
      color: #ffd60a;
    }

    footer .bottom {
      text-align: center;
      font-size: 0.8rem;
      margin-top: 15px;
    }
    footer .bottom a {
      margin-left: 15px;
      color: white;
      text-decoration: none;
    }
    footer .bottom a:hover {
      text-decoration: underline;
      color: #ffd60a;
    }

    /* ✅ Buttons */
    .btn-contact{
      display:inline-block;
      background:#007bff;
      border:0;
      color:#fff;
      border-radius:8px;
      padding:10px 20px;
      font-weight:600;
      font-size:1rem;
      box-shadow: 0 2px 0 rgba(0,0,0,0.12);
      transition: transform .12s ease, box-shadow .12s ease, background .12s ease;
    }
    .btn-contact:hover{
      background:#0069d9;
      transform: translateY(-2px);
      box-shadow: 0 6px 18px rgba(0,0,0,0.18);
    }

    .btn-consult{
      display:inline-block;
      background:transparent;
      border:1px solid #ffd60a;
      color:#ffd60a;
      border-radius:8px;
      padding:8px 18px;
      font-weight:400;
      font-size:1rem;
      transition: background .12s ease, color .12s ease, transform .12s ease;
    }
    .btn-consult:hover{
      background:#ffd60a;
      color:#000;
      transform: translateY(-2px);
    }

    footer .btn-contact { padding:6px 14px; font-size:0.92rem; border-radius:6px; }
    footer .btn-consult  { padding:6px 12px; font-size:0.92rem; border-radius:6px; }

      /* Image hover effect */
  .img-hover img {
  transition: transform 0.4s ease, box-shadow 0.4s ease;
  border-radius: 10px;
}
  .img-hover img:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 25px rgba(0,0,0,0.25);
}
   /* Fullwidth background */
.fullwidth {
  width: 100%;
  margin: 0;
  padding: 80px 0; /* only top-bottom padding */
}

/* Background styling */
.section-bg1 {
  background: linear-gradient(90deg, #0d1b2a, #1b263b);
  color: #ffd60a;
}

/* Keep text aligned like other sections */
.section-bg1 .container {
  max-width: 1200px; /* same as Bootstrap container */
  margin: 0 auto;
  padding: 0 20px;
}
.section-bg1 h2{
  color: #ffd60a;
}

  </style>
</head>
<body>

  <!-- ✅ Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="newproject.html">
        <img src=<?= base_url('assets_system/images/header_logo.png') ?> alt="Line Seiki Logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="<?= base_url() ?>">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= base_url('index/about_us') ?>">About Us</a></li>

          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              Product and Services
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?= base_url('index/ps_prod') ?>">Products</a></li>
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">Services</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?= base_url('index/ps_serv_simulation') ?>">Simulation Analysis</a></li>
                  <li><a class="dropdown-item" href="ps+serv_silicone">Silicone Molding & Urethane Casting</a></li>
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

  <!-- ✅ Sections -->
  <main style="margin-top:80px;">
    <!-- 1. GEMBA Overview -->
<section>
  <div class="section-bg row align-items-center">
    <!-- Left Content -->
    <div class="col-md-7">
      <h2>GEMBA Machine Monitoring System</h2>
      <p>
        The GEMBA Machine Monitoring System provides real-time visibility into your
        manufacturing operations. It empowers businesses to track machine performance,
        identify downtime causes, and improve efficiency.
      </p>
    </div>

    <!-- Right Image Placeholder with Hover -->
    <div class="col-md-5 text-center">
      <div class="img-hover">
        <img src="<?= base_url('assets_system/images/gemba2.png') ?>" 
             alt="GEMBA Overview" class="img-fluid rounded shadow">
      </div>
    </div>
  </div>
</section>
<!-- Section 2: System Components -->
<section class="section-bg1 fullwidth">
  <div class="container">
    <h2>System Components</h2>
    <ul>
      <li><strong>Smart Counter</strong> – Input device that collects machine data.</li>
      <li><strong>Base Station</strong> – Data receiver that aggregates information from counters.</li>
      <li><strong>Gemba Reporter</strong> – Software access platform to analyze and view production data.</li>
    </ul>
  </div>
</section>


    
    <!-- 3. Production Data -->
<section>
  <div class="section-bg">
    <h2>Production Data</h2>
    <p>GEMBA collects critical production information to enhance decision-making:</p>
    <ul>
      <li>Machine status (running, idle, stopped)</li>
      <li>Downtime causes and frequency</li>
      <li>Production efficiency and throughput analysis</li>
    </ul>
  </div>
</section>


    <!-- 4. Request Demo CTA -->
    <section class="text-center">
      <h2>Request a Demo</h2>
      <p>Interested in experiencing GEMBA in action? Request a demo or inquire about testing GEMBA on your machines.</p>
      <form class="mx-auto" style="max-width:600px; text-align:left;">
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" placeholder="Your Name">
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" placeholder="Your Email">
        </div>
        <div class="mb-3">
          <label class="form-label">Message</label>
          <textarea class="form-control" rows="4" placeholder="Your Inquiry"></textarea>
        </div>
        <button type="submit" class="btn btn-contact">Submit Request</button>
      </form>
    </section>
  </main>

  <!-- ✅ Footer -->
  <footer>
    <div class="top">
      <h2>Get in Touch with Us</h2>
      <div>
        <button class="btn btn-contact">Contact</button>
        <button class="btn btn-consult">Consult</button>
      </div>
    </div>
    <p>We’re here to assist with your inquiries and needs.</p>

    <div class="middle">
      <img src= <?= base_url('assets_system/images/header_logo.png') ?> alt="Line Seiki Logo">
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

    <div class="bottom">
      <span>© 2025 Line Seiki Asia Pacific. All rights reserved.</span>
      <a href="#">Privacy Policy</a>
      <a href="#">Terms of Service</a>
      <a href="#">Cookie Settings</a>
    </div>
  </footer>

    <!-- Bootstrap 5 JS -->
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
          this.closest('.dropdown-menu').querySelectorAll('.show').forEach(function(openMenu){
            if(openMenu !== submenu){
              openMenu.classList.remove('show');
            }
          });
        });
      });
      document.addEventListener('click', function(){
        document.querySelectorAll('.dropdown-menu .show').forEach(function(openMenu){
          openMenu.classList.remove('show');
        });
      });
    });
      
  </script>
</body>
</html>
