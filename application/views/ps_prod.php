<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Products - Line Seiki Asia Pacific</title>

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

    /* ✅ Products Section */
    .products {
      padding: 100px 10% 60px; /* extra padding for navbar offset */
      text-align: center;
    }
    .products h1 {
      font-size: 2.5rem;
      margin-bottom: 40px;
    }
    .categories {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }
    .category {
      position: relative;
      border-radius: 12px;
      overflow: hidden;
      cursor: pointer;
    }
    .category img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      display: block;
      transition: transform 0.5s ease;
    }
    .category:hover img {
      transform: scale(1.1);
    }
    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.7);
      color: #fff;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 20px;
      opacity: 0;
      transition: opacity 0.4s ease;
    }
    .category:hover .overlay {
      opacity: 1;
    }
    .overlay h3 {
      font-size: 1.3rem;
      margin-bottom: 10px;
      color: #ff6a5c;
    }
    .overlay p {
      font-size: 0.9rem;
    }

    /* ✅ CTA Section (keeps dark navy look) */
    .cta {
      background: #0a1423;
      color: white;
      text-align: center;
      padding: 60px 10%;
    }
    .cta h2 {
      font-size: 2rem;
      margin-bottom: 15px;
    }
    .cta p {
      margin-bottom: 20px;
      font-size: 1rem;
    }

    /* ✅ Footer base styling */
    footer {
      background-color: #0a1423; /* dark navy background like screenshot */
      color: white;
      padding: 40px 10%;
      font-family: Arial, Helvetica, sans-serif;
    }

    footer h2 {
      color: #ffd60a; /* Yellow "Get in Touch with Us" */
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

    .btn-contact{
      display:inline-block;
      background:#007bff;        /* solid blue */
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
      background:transparent;            /* transparent background */
      border:1px solid #ffd60a;          /* yellow border */
      color:#ffd60a;                     /* yellow text */
      border-radius:8px;
      padding:8px 18px;
      font-weight:400;
      font-size:1rem;
      transition: background .12s ease, color .12s ease, transform .12s ease;
    }
    .btn-consult:hover{
      background:#ffd60a;                /* fill yellow on hover */
      color:#000;                        /* black text on hover */
      transform: translateY(-2px);
    }

    /* Slightly smaller buttons for footer area */
    footer .btn-contact { padding:6px 14px; font-size:0.92rem; border-radius:6px; }
    footer .btn-consult  { padding:6px 12px; font-size:0.92rem; border-radius:6px; }

    /* If you want CTA buttons a bit larger for emphasis (optional) */
    .cta .btn-contact { padding:11px 24px; font-size:1.02rem; }
    .cta .btn-consult  { padding:10px 20px; font-size:1.02rem; }
  </style>
</head>
<body>

  <!-- ✅ Bootstrap Navbar -->
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

 <!-- ✅ Products Section -->
  <section class="products">
    <h1>Our Product Categories</h1>
    <div class="categories">
      <!-- (Your product cards stay the same) -->
      <!-- Example -->
      <div class="category">
        <img src=<?= base_url('assets_system/images/safetyswitches.jpg')?> alt="Safety Switches">
        <div class="overlay">
          <h3>Safety Switches</h3>
          <p>Durable switches designed for industrial safety applications.</p>
        </div>
      </div>
      <div class="category">
        <img src=<?= base_url('assets_system/images/electroniccounter.jpg')?> alt="Electronic Counters">
        <div class="overlay">
          <h3>Electronic Counters</h3>
          <p>Reliable counters for production monitoring and automation.</p>
        </div>
      </div>
      <div class="category">
        <img src=<?= base_url('assets_system/images/timer.jpg')?> alt="Timers">
        <div class="overlay">
          <h3>Timers</h3>
          <p>Accurate timers for industrial and laboratory use.</p>
        </div>
      </div>
      <div class="category">
        <img src=<?= base_url('assets_system/images/mechanicalcounter.jpg')?> alt="Mechanical Counters">
        <div class="overlay">
          <h3>Mechanical Counters</h3>
          <p>Classic counters built for long-term mechanical reliability.</p>
        </div>
      </div>
      <div class="category">
        <img src=<?= base_url('assets_system/images/slidelimit.jpg')?> alt="Slide Limit Counters">
        <div class="overlay">
          <h3>Slide Limit Counters</h3>
          <p>Compact and accurate slide limit counters for varied use.</p>
        </div>
      </div>
      <div class="category">
        <img src=<?= base_url('assets_system/images/limitswitch.jpg')?> alt="Limit Switches">
        <div class="overlay">
          <h3>Limit Switches</h3>
          <p>Precision limit switches for position sensing and control.</p>
        </div>
      </div>
      <div class="category">
        <img src=<?= base_url('assets_system/images/countersensor.jpg')?> alt="Length Counters & Sensors">
        <div class="overlay">
          <h3>Length Counters & Sensors</h3>
          <p>High-precision sensors for measuring length and dimensions.</p>
        </div>
      </div>
      <div class="category">
        <img src=<?= base_url('assets_system/images/rotary.jpg')?> alt="Rotary Encoders">
        <div class="overlay">
          <h3>Rotary Encoders</h3>
          <p>Encoders for accurate angular position and motion detection.</p>
        </div>
      </div>
      <div class="category">
        <img src=<?= base_url('assets_system/images/tachometer.jpg')?> alt="Tachometers">
        <div class="overlay">
          <h3>Tachometers</h3>
          <p>Digital tachometers for RPM and speed measurements.</p>
        </div>
      </div>
      <div class="category">
        <img src=<?= base_url('assets_system/images/thermometers1.jpg')?> alt="Thermometers">
        <div class="overlay">
          <h3>Thermometers</h3>
          <p>Precise thermometers for industrial and lab applications.</p>
        </div>
      </div>
      <div class="category">
        <img src=<?= base_url('assets_system/images/measuring.jpg')?> alt="Measuring Instruments">
        <div class="overlay">
          <h3>Measuring Instruments</h3>
          <p>Instruments designed for reliable industrial measurement.</p>
        </div>
      </div>
      <div class="category">
        <img src=<?= base_url('assets_system/images/tallycounter.png')?> alt="Tally Counters">
        <div class="overlay">
          <h3>Tally Counters</h3>
          <p>Portable tally counters for manual counting needs.</p>
        </div>
      </div>
    </div>
    </div>
  </section>


  <!--CTA Section (updated) -->
<section class="cta">
  <h2>Looking for the Right Measuring Solution?</h2>
  <p>Contact us today to discuss your requirements and find the perfect product for your needs.</p>
  <!-- changed Contact -> Inquire, removed Consult -->
  <button class="btn btn-contact">INQUIRE</button>
</section>


  <!--Footer (buttons updated) -->
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
