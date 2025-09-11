<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Line Seiki Asia Pacific Service</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

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

    /* Cards */
    .container {
      max-width: 800px;
      width: 100%;
      margin: auto;
      padding: 20px;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }
    .card {
      background: #fff;
      border: 1px solid #e0e0e0;
      border-radius: 12px;
      padding: 25px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
      cursor: pointer;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }
    .card-header {
      display: flex;
      align-items: center;
      font-size: 1.5em;
      font-weight: 500;
      color: #004d40;
      margin-bottom: 10px;
    }
    .card-header svg {
      margin-right: 10px;
      color: #00796b;
    }
    .card-content {
      font-size: 1em;
      color: #555;
    }
    .card-content p {
      margin: 0;
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
    body, html {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
}
.section-one {
  width: 100%;
  height: 100vh; /* full screen height */
}


.slider-container {
    width: 100%;
    height: 100vh;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    transition: background-image 1s ease-in-out; /* fallback */
}

.slider-container.fade {
    opacity: 0;
    transition: opacity 1s ease-in-out; /* smooth fade */
}
    
/* ✅ Slider Indicators (dots) */
.slider-indicators {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 10px;
    z-index: 10;
}

.slider-indicators span {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.5);
    cursor: pointer;
    transition: background 0.3s;
}

.slider-indicators span.active {
    background: #ffd60a; /* highlight color */
}
.hero-content {
  position: absolute;
  top: 50%;
  left: 10%;
  transform: translateY(-50%);
  max-width: 600px;
  z-index: 5;
}

.hero-content h1 {
  font-size: 3.5rem;   /* bigger */
  line-height: 1.2;
  letter-spacing: 1px; /* optional for spacing */
}


.hero-content p {
  font-size: 1.1rem;
  margin-top: 10px;
}
 .products {
      padding: 100px 10% 60px; /* extra padding for navbar offset */
      text-align: center;
      background-color: #1b263b;
      color: #fff; /* make text white for contrast */
    }
    .products h1 {
      font-size: 2.5rem;
      margin-bottom: 40px;
      color: #ffd60a;
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
    .section-white .py-16.text-center {
  margin-bottom: 40px; /* spacing below title */
}

.section-white h1 {
  font-size: 2.5rem;
  font-weight: 700;
  color: #0a192f;
  margin-bottom: 15px;
}

.section-white p {
  font-size: 1.1rem;
  color: #555;
  max-width: 700px;
  margin: 0 auto 20px;
  line-height: 1.6;
}

/* Case Study Cards */
.section-white .max-w-4xl {
  background: #fff;
  border-radius: 15px;
  overflow: hidden;
  margin-bottom: 50px;
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.section-white .max-w-4xl:hover {
  transform: translateY(-6px);
  box-shadow: 0 10px 22px rgba(0, 0, 0, 0.12);
}

.section-white img {
  width: 100%;
  height: 320px;
  object-fit: cover;
}

.section-white h2 {
  font-size: 1.8rem;
  font-weight: 700;
  margin: 15px 0;
  color: #222;
}

.section-white span {
  display: block;
  font-size: 0.9rem;
  font-weight: 600;
  letter-spacing: 1px;
  margin-bottom: 10px;
}

.section-white p.text-lg {
  font-size: 1rem;
  color: #666;
  margin-bottom: 20px;
}

.section-white a {
  font-size: 1rem;
  font-weight: 600;
  color: #0077b6;
  text-decoration: none;
  transition: color 0.3s;
}

.section-white a:hover {
  color: #023e8a;
}
.case-studies {
  padding: 60px 20px;
  background: #f9f9fb;
  text-align: center;
}

.case-studies .container {
  max-width: 1100px;
  margin: 0 auto;
}

.case-studies h2 {
  font-size: 2.2rem;
  font-weight: 700;
  color: #222;
  margin-bottom: 10px;
}

.case-studies .subtitle {
  font-size: 1.1rem;
  color: #555;
  margin-bottom: 40px;
}

.case-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 25px;
}

.case-card {
  background: #fff;
  border: 2px solid #6c63ff;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  text-align: left;
}

.case-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 18px rgba(0, 0, 0, 0.1);
}

.case-card img {
  width: 100%;
  height: 180px;
  object-fit: cover;
  border-bottom: 2px solid #6c63ff;
}
.card-content {
  padding: 20px;
}

.card-content h3 {
  font-size: 1.3rem;
  font-weight: 600;
  color: #333;
  margin-bottom: 10px;
}

.card-content p {
  font-size: 0.95rem;
  color: #555;
  margin-bottom: 15px;
  line-height: 1.5;
}

.card-content a {
  font-size: 0.95rem;
  font-weight: 600;
  color: #0077b6;
  text-decoration: none;
  transition: color 0.3s;
}

.card-content a:hover {
  color: #023e8a;
}
/* Shared section base styles */
/* --- Section Styling --- */
.section {
  padding: 80px 10%;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  min-height: 80vh;
}

.section h2 {
  font-size: 2.5rem;
  margin-bottom: 50px;
  color: #ffd60a; 
}

/* ✅ News Section (separated from Events) */
.news-section {
  background-color: #1b263b !important; /* light gray background */
  color: #333;
  padding: 80px 10%;
  text-align: center;
}

.news-section h2 {
  color: #0d1b2a; /* darker title */
  margin-bottom: 40px;
}

.news-section .content-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 25px;
  width: 100%;
  max-width: 1100px;
  margin: 0 auto;
}

.news-card {
  background-color: #fff;
  color: #333;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  display: flex;
  flex-direction: column;
  text-align: left;
}

.news-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.news-card img {
  width: 100%;
  height: 150px;
  object-fit: cover;
  background: #ccc;
}

.news-card-content {
  padding: 20px;
}

.news-card-content h3 {
  font-size: 1.2rem;
  font-weight: 600;
  margin-bottom: 10px;
}

.news-card-content p {
  font-size: 0.95rem;
  color: #555;
  margin-bottom: 15px;
  line-height: 1.5;
}

.news-card-content a {
  font-size: 0.95rem;
  font-weight: 600;
  color: #1b263b;
  text-decoration: none;
  transition: color 0.3s;
}

.news-card-content a:hover {
  color: #ffd60a;
}

/* ✅ Events/Webinars keep original styles */
.events-section {
  background-color: #ffffff;
  color: #fff;
}

.events-section h2 {
  color: #ffd60a;
}

.webinars-section {
  background: linear-gradient(90deg, #0d1b2a, #1b263b);
  color: #ffd60a;
}
/* === Section 4 Upload Card Styles === */
.section-navy.project-submission {
  background-color: #d8d8d8ff; /* background stays white */
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
}

.section-navy.project-submission .card {
  border-radius: 12px;
  transition: all 0.3s ease; /* smooth transition */
}

.section-navy.project-submission .card:hover {
  background-color: #ffffffff; /* visible light grey */
  transform: translateY(-5px); /* slight lift effect */
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3); /* stronger shadow */
}


.section-navy.project-submission .btn-outline-primary {
  border-radius: 8px;
  padding: 8px 20px;
}

.section-navy.project-submission .btn-success {
  background-color: #28a745;
  border: none;
  font-weight: 500;
  padding: 10px;
  border-radius: 8px;
}

.section-navy.project-submission .btn-success:hover {
  background-color: #218838;
}
.case-studies h2,
.news-section h2 {
  color: #ffd60a !important;
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

<!-- ✅ Services Section -->
<div class="section-one"> 
  <div class="slider-container">
     <div class="hero-content text-white">
  <h1 class="fw-bold text-warning">Silicone Molding and Urethrane Casting</h1>
  <p>Overview of our low-volume prototyping service using silicone molds and urethane casting.</p>
  <div class="mt-3">
    <a href="#" class="btn btn-primary me-2">Learn More</a>
    <a href="#" class="btn btn-outline-light">View <i class="fa fa-arrow-right ms-1"></i></a>
  </div>
</div>
<div class="slider-indicators"></div> <!-- dots -->
  </div>
</div>


    <!-- Section Cards -->
    <section class="products">
    <h1>List of Materials</h1>
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


    <section class="case-studies">
  <div class="container">
    <h2>Technical Specs</h2>

    <div class="case-grid">
      <!-- Case Study 1 -->
      <div class="case-card">
        <img src="<?= base_url('assets_system/images/simulation6.png') ?>" alt="Case Study 1">
        <div class="card-content">
          <h3>Silicone</h3>
          <p>Provides technical details such as maximum part size, minimum wall thickness, tolerances, and available post-processing options like over-molding and painting</p>
          <a href="#">Read More →</a>
        </div>
      </div>

      <!-- Case Study 2 -->
      <div class="case-card">
        <img src="<?= base_url('assets_system/images/simulation5.png') ?>" alt="Case Study 2">
        <div class="card-content">
          <h3>Pinion Failure Analysis</h3>
          <p>Provides technical details such as maximum part size, minimum wall thickness, tolerances, and available post-processing options like over-molding and painting</p>
          <a href="#">Read More →</a>
        </div>
      </div>

      <!-- Case Study 3 -->
      <div class="case-card">
        <img src="<?= base_url('assets_system/images/simulation7.png') ?>" alt="Case Study 3">
        <div class="card-content">
          <h3>Screw Boss Failure Analysis</h3>
          <p>Provides technical details such as maximum part size, minimum wall thickness, tolerances, and available post-processing options like over-molding and painting</p>
          <a href="#">Read More →</a>
        </div>
      </div>
    </div>
  </div>
</section>
  </section>

     <section class="section news-section">
   <br><br> <h2>Industry</h2>
    <div class="content-container">
      <div class="news-card">
        <img src="https://placehold.co/400x200/cccccc/333333?text=Latest+News" alt="Latest news article.">
        <div class="news-card-content">
          <h3>Company Announcements</h3>
          <p>Stay up-to-date with our official announcements, product releases, and company news.</p>
          <a href="#">Read more</a>
        </div>
      </div>
      <div class="news-card">
        <img src="https://placehold.co/400x200/cccccc/333333?text=Product+Launch" alt="New product launch.">
        <div class="news-card-content">
          <h3>New Product Launch</h3>
          <p>Discover our latest innovation designed to enhance efficiency and precision in your operations.</p>
          <a href="#">Explore</a>
        </div>
      </div>
      <div class="news-card">
        <img src="https://placehold.co/400x200/cccccc/333333?text=Industry+Insights" alt="Industry insights.">
        <div class="news-card-content">
          <h3>Industry Insights</h3>
          <p>Read our latest articles and insights on industry trends and technological advancements.</p>
          <a href="#">Learn more</a>
        </div>
      </div>
    </div>
  </section>

   <!-- Section 4 (navy) -->
<!-- === Section 4 (Project Submission) === -->
<!-- === Section 4 (Project Submission) === -->
<section class="section-navy project-submission">
  <div class="card shadow-lg border-0 text-center p-4" style="max-width: 420px; width:100%;">
    
    <!-- Icon -->
    <div class="mb-3">
      <i class="fas fa-file-upload fa-3x text-primary"></i>
    </div>

    <!-- Title -->
    <h4 class="fw-bold mb-2">Project Submission</h4>
    <p class="text-muted mb-4">
      Upload your CAD models or design drawings to receive a detailed quote.
    </p>

    <!-- File Upload -->
    <label for="file-upload" class="btn btn-outline-primary mb-3">
      <i class="fas fa-paperclip me-2"></i> Select File
    </label>
    <input id="file-upload" type="file" hidden>
    <div id="file-name" class="small text-muted mb-3">No file selected</div>

    <!-- Submit Button -->
    <button class="btn btn-success w-100">Request Quote</button>
  </div>
</section>





<!-- ✅ Footer -->
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
  document.addEventListener('DOMContentLoaded', () => {
    const sliderContainer = document.querySelector('.slider-container');
    const indicatorsContainer = document.querySelector('.slider-indicators');

    const images = [
        '<?= base_url('assets_system/images/siliconemolding7.jpg') ?>',
        '<?= base_url('assets_system/images/siliconemolding8.jpg') ?>',
        '<?= base_url('assets_system/images/siliconemolding9.jpg') ?>',
        '<?= base_url('assets_system/images/siliconemolding10.jpg') ?>',
    ];

    let currentIndex = 0;

    // ✅ Create dots dynamically
    images.forEach((_, index) => {
        const dot = document.createElement('span');
        if (index === 0) dot.classList.add('active');
        dot.addEventListener('click', () => {
            currentIndex = index;
            updateSlide();
        });
        indicatorsContainer.appendChild(dot);
    });

    function updateSlide() {
        sliderContainer.style.backgroundImage = `url('${images[currentIndex]}')`;
        document.querySelectorAll('.slider-indicators span').forEach((dot, idx) => {
            dot.classList.toggle('active', idx === currentIndex);
        });
    }

    function changeBackground() {
        currentIndex = (currentIndex + 1) % images.length;
        updateSlide();
    }

    // ✅ Initial setup
    updateSlide();

    // Auto change every 5 seconds
    setInterval(changeBackground, 5000);
});
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
    // Simple JavaScript to display the selected file name
  document.getElementById('file-upload').addEventListener('change', function() {
    const fileName = this.files.length > 0 ? this.files[0].name : 'No file selected';
    document.getElementById('file-name').textContent = fileName;
  });
  function updateSlide() {
    // Start fade out
    sliderContainer.classList.add('fade');

    setTimeout(() => {
        // Change background after fade out
        sliderContainer.style.backgroundImage = `url('${images[currentIndex]}')`;

        // Update active dot
        document.querySelectorAll('.slider-indicators span').forEach((dot, idx) => {
            dot.classList.toggle('active', idx === currentIndex);
        });

        // Fade back in
        sliderContainer.classList.remove('fade');
    }, 1000); // match transition duration
}

</script>
</body>
</html>
