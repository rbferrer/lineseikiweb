<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us - Line Seiki Asia Pacific</title>

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
    section:first-of-type {
  padding-top: 120px; /* pushes header below navbar */
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

    /* ✅ Section Styling */
    section {
      padding: 60px 10%;
    }
    section h2 {
      margin-bottom: 20px;
      font-size: 2rem;
      color: #0d1b2a;
    }

    /* ✅ CTA Section (dark navy look) */
    .cta {
      background: #0a1423;
      color: white;
      text-align: center;
      padding: 60px 10%;
    }
    .cta h2 {
      font-size: 2rem;
      margin-bottom: 15px;
      color: #ffd60a;
    }
    .cta p {
      margin-bottom: 20px;
      font-size: 1rem;
    }

    /* ✅ Footer base styling */
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
    .cta .btn-contact { padding:11px 24px; font-size:1.02rem; }
    .cta .btn-consult  { padding:10px 20px; font-size:1.02rem; }

    /* Contact form */
    .contact-form input, 
    .contact-form textarea {
      margin-bottom: 15px;
    }
    .section2{
      background-color: #0a1423;
    }
    .section2 p{
      color: #ffd60a;
    }
    .section2 h2{
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
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Product and Services</a>
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

  <!-- ✅ Section 1: Header / Intro -->
  <section class="section1">
    <h2>We’d Love to Hear from You</h2>
    <p>Get in touch with Line Seiki Asia Pacific for inquiries, product support, or to schedule a consultation. Our team is ready to help you with precision measuring solutions tailored to your needs.</p>
  </section>

  <!-- ✅ Section 2: Contact Information -->
  <section class="section2">
    <h2>Contact Information</h2>
    <p><i class="fas fa-map-marker-alt"></i> Office Address: 123 LSA Tower, Makati City, Philippines</p>
    <p><i class="fas fa-phone"></i> Phone: +63 2 1234 5678</p>
    <p><i class="fas fa-envelope"></i> Email: support@lineseiki.com</p>
    <p><i class="fas fa-clock"></i> Operating Hours: Mon - Fri, 9:00 AM - 6:00 PM</p>
  </section>

  <!-- ✅ Section 3: Contact Form -->
  <section class="section3">
    <h2>Send Us a Message</h2>
    <form class="contact-form">
      <input type="text" class="form-control" placeholder="Your Name" required>
      <input type="email" class="form-control" placeholder="Your Email" required>
      <input type="text" class="form-control" placeholder="Subject" required>
      <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
      <button type="submit" class="btn btn-contact">Submit</button>
    </form>
  </section>

  <!-- ✅ Section 4: Location / Map -->
  <section class="section4">
    <h2>Our Location</h2>
    <p>Visit our offices in Southeast Asia and nearby regions. Find us easily using the map below:</p>
    <div class="ratio ratio-16x9">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3854.751028040799!2d121.02144431537982!3d14.554729889830985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c90d6c7a3e05%3A0xbad89ec5fb84ef5f!2sMakati%20City%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1709876543210" 
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </section>

  <!-- ✅ CTA Section (Updated Text & Buttons) -->
  <section class="cta">
    <h2>Ready to Take the Next Step?</h2>
    <p>Schedule a consultation or request a product demo directly through our website today.</p>
    <button class="btn btn-contact">Schedule Consultation</button>
    <button class="btn btn-consult">Request Demo</button>
  </section>

  <!-- ✅ Footer (unchanged) -->
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
