<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Professional News & Events</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    /* Base Styles */
    body {
      background: linear-gradient(90deg, #0d1b2a, #1b263b);;
      color: #333;
      font-family: Arial, Helvetica, sans-serif;
      line-height: 1.6;
    }

    /* Navbar */
    .navbar {
      /* Changed from linear-gradient to a solid black background */
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
    .news-section, .events-section {
      background-color: #ffffff;
      color: #fff;
    }
    .news-section h2, .events-section h2 {
      color: #ffd60a;
    }
    .webinars-section {
      background-color: linear-gradient(90deg, #0d1b2a, #1b263b);;
      color: #ffd60a;
    }

    .content-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
      width: 100%;
      max-width: 1200px;
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
    }
    .news-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }
    .news-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 0;
      box-shadow: none;
    }
    .news-card-content {
      padding: 25px;
      text-align: left;
    }
    .news-card h3 {
      font-size: 1.5rem;
      margin-bottom: 10px;
    }
    .news-card p {
      font-size: 0.95rem;
      color: #666;
      margin-bottom: 15px;
      max-width: none;
    }
    .news-card a {
      color: #ff6a5c;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s ease;
    }
    .news-card a:hover {
      color: #e85a4a;
    }
    /* --- Footer Styles --- */
    footer {
      background-color: linear-gradient(90deg, #0d1b2a, #1b263b);;
      color: white;
      padding: 40px 10%;
      text-align: left;
    }
    footer .top {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 30px;
    }
    footer .top h2 {
      font-size: 2rem;
      color: #ffd60a;
    }
    footer .top div {
      display: flex;
      gap: 15px;
    }
    .btn {
      padding: 10px 20px;
      border-radius: 20px;
      border: none;
      cursor: pointer;
      margin-right: 10px;
      font-size: 0.95rem;
    }
    .btn-primary {
      background-color: linear-gradient(90deg, #0d1b2a, #1b263b);;
      color: white;
      transition: all 0.3s ease;
    }
    .btn-primary:hover {
      background-color: linear-gradient(90deg, #0d1b2a, #1b263b);;
      transform: translateY(-2px);
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }
    .btn-secondary {
      background-color: transparent;
      border: 1px solid #ffd60a;
      color: inherit;
      transition: all 0.3s ease;
    }
    .btn-secondary:hover {
      background-color: linear-gradient(90deg, #0d1b2a, #1b263b);;
      color: #ffd60a;
      transform: translateY(-2px);
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
    footer .middle {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      padding: 20px 0;
      border-top: 1px solid #333;
      margin-top: 20px;
      margin-bottom: 20px;
    }
    footer .middle img {
      height: 40px;
      width: auto;
      display: block;
    }
    footer .links {
      display: flex;
      gap: 20px;
    }
    footer .links a {
      color: #fff;
      text-decoration: none;
      margin-right: 20px;
    }
    footer .links a:hover {
      text-decoration: underline;
    }
    footer .socials {
      display: flex;
      gap: 15px;
      font-size: 1.3rem;
    }
    footer .socials a {
      color: white;
      transition: color 0.3s ease;
    }
    footer .socials a:hover {
      color: #ff6a5c;
    }
    footer .bottom {
      margin-top: 15px;
      font-size: 0.85rem;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }
    footer .bottom a {
      color: white;
      text-decoration: none;
    }
    footer .bottom a:hover {
      text-decoration: underline;
    }
    /* Responsive Styles */
    @media (max-width: 768px) {
      .section {
        padding: 40px 5%;
      }
      footer .top {
        flex-direction: column;
        align-items: flex-start;
      }
      footer .middle {
        flex-direction: column;
        align-items: flex-start;
        gap: 20px;
      }
      footer .links {
        flex-direction: column;
      
      }
      footer .bottom {
        justify-content: flex-start;
      }
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="<?= base_url('assets_system/images/header_logo.png') ?>" alt="Line Seiki Logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about_us">About Us</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Product and Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="ps_prod">Products</a></li>
              <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle" href="#">Services</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Simulation Analysis</a></li>
                  <li><a class="dropdown-item" href="#">Silicone Molding & Urethane Casting</a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="#">IoT Solution</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="news_event">News and Events</a></li>
          <li class="nav-item"><a class="nav-link" href="library">Library</a></li>
          <li class="nav-item"><a class="nav-link" href="contact_us">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="section news-section">
   <br><br> <h2>News and Updates</h2>
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
  <hr>
  <section class="section webinars-section">
    <h2>Upcoming Webinars</h2>
    <div class="content-container">
      <div class="news-card">
        <img src="https://placehold.co/400x200/cccccc/333333?text=Webinar+1" alt="Webinar on IoT solutions.">
        <div class="news-card-content">
          <h3>Smart IoT Solutions</h3>
          <p>Join our expert-led webinar on integrating smart solutions for seamless operational control.</p>
          <a href="#">Register now</a>
        </div>
      </div>
      <div class="news-card">
        <img src="https://placehold.co/400x200/cccccc/333333?text=Webinar+2" alt="Webinar on precision tools.">
        <div class="news-card-content">
          <h3>Mastering Precision Tools</h3>
          <p>A deep dive into our new line of precision instruments and how to use them effectively.</p>
          <a href="#">Learn more</a>
        </div>
      </div>
      <div class="news-card">
        <img src="https://placehold.co/400x200/cccccc/333333?text=Webinar+3" alt="Webinar on data analytics.">
        <div class="news-card-content">
          <h3>Data-Driven Decisions</h3>
          <p>Understand how to leverage real-time data from our systems to make smarter decisions.</p>
          <a href="#">View details</a>
        </div>
      </div>
    </div>
  </section>
  <hr>
  <section class="section events-section">
    <h2>Events and Exhibitions</h2>
    <div class="content-container">
      <div class="news-card">
        <img src="https://placehold.co/400x200/cccccc/333333?text=Event+1" alt="Industry trade show.">
        <div class="news-card-content">
          <h3>Global Tech Expo</h3>
          <p>Join us at the largest tech expo of the year to witness our live product demonstrations.</p>
          <a href="#">Find out more</a>
        </div>
      </div>
      <div class="news-card">
        <img src="https://placehold.co/400x200/cccccc/333333?text=Event+2" alt="Product seminar.">
        <div class="news-card-content">
          <h3>Technical Seminar</h3>
          <p>A series of talks by our engineers on the latest advancements in industrial measurement.</p>
          <a href="#">View schedule</a>
        </div>
      </div>
      <div class="news-card">
        <img src="https://placehold.co/400x200/cccccc/333333?text=Event+3" alt="Client showcase event.">
        <div class="news-card-content">
          <h3>Client Showcase</h3>
          <p>See how our solutions have transformed businesses and discover real-world case studies.</p>
          <a href="#">Explore projects</a>
        </div>
      </div>
    </div>
  </section>
  <hr>
  <footer>
    <div class="top">
      <h2>Get in Touch with Us</h2>
      <div>
        <button class="btn btn-primary">Contact</button>
        <button class="btn btn-secondary">Consult</button>
      </div>
    </div>
    <p>We’re here to assist with your inquiries and needs.</p>
    <div class="middle">
      <img src="<?= base_url('assets_system/images/header_logo.png') ?>" alt="Logo">
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

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