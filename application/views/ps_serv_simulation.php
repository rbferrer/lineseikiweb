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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap">

  

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
      margin-bottom: 20px
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
                                f
    .container-one {
            max-width: 960px;
            margin: 0 auto;
            text-align: center;
            
    
        }
        .container-one h2 {
  text-align: center;   /* center the heading */
  margin-bottom: 20px;
  color: #ffd60a;
}

         .types-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .type-card {
            background: #f0f4f8;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #e0e6ed;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .type-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .type-card svg {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
            color: #1a237e;
        }

        .type-card h3 {
            font-size: 1em;
            font-weight: 600;
            margin-bottom: 5px;
            color: #333;
        }

        .type-card p {
            font-size: 0.8em;
            color: #666;
        }
         .type-card .see-more {
            display: inline-block;
            margin-top: 10px;
            padding: 5px 15px;
            background-color: #023e8a;
            color: #ffffffff;
            text-decoration: none;
            border: 1px solid #023e8a ;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .type-card .see-more:hover {
            background-color: #ffd60a;
            color: #1b263b;
        }
        /* ===== Fix Section 3 (Case Studies) Layout ===== */
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

    .quote-box {
      border: 2px solid #4a3cff;
      border-radius: 8px;
      padding: 20px 30px;
      text-align: center;
      max-width: 320px;
      background: #fff;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
      transition: all 0.3s ease;
    }

    .quote-box:hover {
      box-shadow: 0 6px 16px rgba(0,0,0,0.15);
      transform: translateY(-3px);
    }

    .quote-title {
      font-size: 18px;
      font-weight: bold;
      color: #000;
      margin-bottom: 8px;
    }

    .quote-subtitle {
      font-size: 14px;
      color: #444;
    }
    
  /* preview */
  .portal-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
   padding: 60px 20px;
  background-color: transparent; /* remove the blue background */
  font-family: 'Roboto', sans-serif; /* Using a common modern sans-serif font */
}

.upload-section {
  background-color: #ffffff;
  border-radius: 10px;
  padding: 2.5rem 2rem;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
  text-align: center;
  max-width: 380px;
  width: 100%;
  box-sizing: border-box;
  border-top: 5px solid #4a90e2; /* A subtle accent color at the top */
}

.icon-header {
  font-size: 3.5rem;
  color: #4a90e2; /* Matching the accent color */
  margin-bottom: 1rem;
}

.upload-section h2 {
  font-size: 1.7rem;
  color: #333;
  margin-bottom: 0.7rem;
  font-weight: 600;
}

.upload-section .description {
  font-size: 0.95rem;
  color: #666;
  margin-bottom: 1.8rem;
  line-height: 1.5;
}

.custom-file-upload {
  display: inline-block;
  background-color: #4a90e2;
  color: white;
  padding: 10px 20px;
  border-radius: 6px;
  cursor: pointer;
  transition: background-color 0.3s ease;
  margin-bottom: 15px;
  font-size: 1rem;
  font-weight: 500;
}

.custom-file-upload:hover {
  background-color: #357ABD;
}

.custom-file-upload .fas {
  margin-right: 8px;
}

.selected-file-name {
  display: block;
  font-size: 0.9rem;
  color: #888;
  margin-bottom: 25px;
}

.submit-project-btn {
  background-color: #28a745;
  color: white;
  padding: 12px 25px;
  border: none;
  border-radius: 6px;
  font-size: 1.05rem;
  cursor: pointer;
  transition: background-color 0.3s ease;
  width: 100%;
  font-weight: 500;
}

.submit-project-btn:hover {
  background-color: #218838;
}
/* CTA */
.cta-card {
  background: #0a192f;
  color: #fff;
  border-radius: 1.5rem;
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
  max-width: 40rem;
  min-height: 400px;   /* ⬅️ makes it taller */
  width: 100%;
  padding: 2rem;
  text-align: center;
  transition: transform 0.3s ease;
}

.cta-card:hover {
  transform: scale(1.05);
}

/* Title */
.cta-title {
  font-size: 2rem; /* text-3xl */
  font-weight: 800;
  margin-bottom: 1rem;
  color: #fff !important;    /* heading in white */
}

@media (min-width: 768px) {
  .cta-title {
    font-size: 2.25rem; /* text-4xl */
  }
}

/* Subtitle */
.cta-subtitle {
  font-size: 1rem;
  opacity: 0.9;
  margin-bottom: 2rem;
  color: #fff !important;    /* paragraph in white */
  
}

@media (min-width: 768px) {
  .cta-subtitle {
    font-size: 1.125rem;
  }
}

/* Buttons container */
.cta-buttons {
  display: flex;
  flex-direction: column;
  gap: 1rem;
  justify-content: center;
  align-items: center;   /* ⬅️ centers buttons horizontally */
}

@media (min-width: 640px) {
  .cta-buttons {
    flex-direction: row;
    gap: 1rem;
    justify-content: center; /* keeps them centered in row view */
    align-items: center;
  }
}
/* Section 5 CTA Button Styles */
.cta-buttons .btn-primary {
  background-color: #0077b6;   /* solid blue */
  color: #fff;
  border: none;
  border-radius: 6px;
  font-weight: 600;
  padding: 10px 25px;
  transition: background-color 0.3s ease;
}

.cta-buttons .btn-primary:hover {
  background-color: #0077b6;   /* darker blue on hover */
}

/* Yellow/Black button */
.cta-buttons .btn-secondary {
  background-color: #0a192f;      /* black background */
  color: #ffd60a;              /* yellow text */
  border: 2px solid #ffd60a;   /* yellow border */
  border-radius: 6px;
  font-weight: 600;
  padding: 10px 25px;
  transition: all 0.3s ease;
}

.cta-buttons .btn-secondary:hover {
  background-color: #ffd60a;   /* yellow background */
  color: #000;                 /* black text */
}
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
    .footer-middle {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  margin: 25px 0;
}

.footer-logo-links {
  display: flex;
  align-items: center;
  gap: 20px;   /* space between logo and links */
}

.footer-logo {
  height: 28px;   /* smaller logo */
  width: auto;
}
footer img[alt="Logo"] {
  height: 40px;   /* smaller logo */
  width: auto;
  margin-right: 20px;  /* spacing from links */
}


  </style>
</head>
<body>

 <!-- ✅ Fixed Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container-fluid">
    <!-- Logo on the LEFT -->
    <a class="navbar-brand" href="#">
      <img src="<?= base_url('assets_system/images/header_logo.png') ?>" alt="Line Seiki Logo">
    </a>

    <!-- Toggler for mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navigation items -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="<?= base_url() ?>">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('index/about_us') ?>">About Us</a></li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
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

  <!-- Offset for fixed navbar -->
  <div style="margin-top:90px"></div>

  <!-- Section 1 (white) -->
  <section class="section-white">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h1>Simulation Analysis Service</h1>
          <h4><p>Features</p></h4>
          <h5><p>Advanced simulation technology<br>
Utilizing the latest analysis algorithms and high-speed processing capabilities.
<br><br>
High-precision analysis<br>
Detailed and meticulous analysis for product design and process improvement
<br><br>
Applicability across various industries<br>
Usable in a wide range of fields, including automotive, aerospace, and electronics.
<br><br>
Customizable analysis options<br>
Analysis settings that can be adjusted to meet the needs of customers.<br><br>
</p></h5>                                                       
        </div>
        <div class="col-lg-6">
          <img src="<?= base_url('assets_system/images/simulation gif.gif') ?>" alt="Section 1">
        </div>
      </div>
    </div>
  </section>  

  <!-- Section 2 (navy) -->
  <section class="section-navy">
    
<div class="container-one">
    <h2>Types of Simulation</h2>
    <div class="types-grid">
        <div class="type-card">
            <img src="<?= base_url('assets_system/images/simulation2.png') ?>" <br>fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m-2-4h2m-4 0a2 2 0 00-2-2H5a2 2 0 00-2 2h2m4 0a2 2 0 002-2h-2m4-2a2 2 0 00-2-2v-2a2 2 0 00-2 2h2z" />
            </svg>
            <h3>Structural/Static Simulation (Nastran/Patran/Apex)</h3>
            <p>Evaluate the strength, stiffness, and stability of a component under various loads.</p>
              <a href="#" class="see-more">Learn more</a>
        </div>
        <div class="type-card">
             <img src="<?= base_url('assets_system/images/simulation3.png') ?>"<br> fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 2a10 10 0 100 20 10 10 0 000-20zM12 8v4l3 3m-4-7a1 1 0 11-2 0 1 1 0 012 0z" />
            </svg>
            <h3>Fatigue Simulation (Nastran/Patran/Apex)</h3>
            <p>Analyze fluid flow, heat transfer, and related phenomena for optimal design.</p>
              <a href="#" class="see-more">Learn more</a>
        </div>
        <div class="type-card">
           <br> <br><img src="<?= base_url('assets_system/images/simulation4.png') ?>"<br><br><br>fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14 10.5a2 2 0 11-4 0 2 2 0 014 0zM12 18V6m0 0a2 2 0 10-4 0v12a2 2 0 104 0m0 0a2 2 0 104 0v-2a2 2 0 00-2-2H12z" />
            </svg>
            <h3>Vibration & Dynamics Simulation (Nastran/Patran/Apex)</h3>
            <p>Predict heat flow and temperature distribution to prevent thermal issues.</p>
              <a href="#" class="see-more">Learn more</a>
        </div>
    </div>
</div>
</section>
<br>
<br>
<br>
<br>

  <!-- Section 3 (white) -->
  <section class="section-white">
  <section class="case-studies">
  <div class="container">
    <h2>Case Studies</h2>
    <p class="subtitle">Real-world examples from past clients</p>

    <div class="case-grid">
      <!-- Case Study 1 -->
      <div class="case-card">
        <img src="<?= base_url('assets_system/images/simulation6.png') ?>" alt="Case Study 1">
        <div class="card-content">
          <h3>Cover Thermal Buckling Analysis</h3>
          <p>We helped an automotive company reduce drag by 12% using advanced CFD simulations.</p>
          <a href="#">Read More →</a>
        </div>
      </div>

      <!-- Case Study 2 -->
      <div class="case-card">
        <img src="<?= base_url('assets_system/images/simulation5.png') ?>" alt="Case Study 2">
        <div class="card-content">
          <h3>Pinion Failure Analysis</h3>
          <p>FEA simulations helped reduce material costs while maintaining durability and strength.</p>
          <a href="#">Read More →</a>
        </div>
      </div>

      <!-- Case Study 3 -->
      <div class="case-card">
        <img src="<?= base_url('assets_system/images/simulation7.png') ?>" alt="Case Study 3">
        <div class="card-content">
          <h3>Screw Boss Failure Analysis</h3>
          <p>Enhanced blade design increased energy output by 15% through simulation analysis.</p>
          <a href="#">Read More →</a>
        </div>
      </div>
    </div>
  </div>
</section>
  </section>

<!-- Section 4 (navy) -->

<section class="section-navy">
  <div class="container-one">
    <div class="portal-wrapper">
      <div class="upload-section">
        <div class="icon-header">
          <i class="fas fa-file-upload"></i>
        </div>
        <h2>Project Submission</h2>
        <p class="description">Upload your CAD models or design drawings to receive a detailed quote.</p>
        <label for="file-upload" class="custom-file-upload">
          <i class="fas fa-paperclip"></i> Select File
        </label>
        <input id="file-upload" type="file" style="display: none;">
        <span id="file-name" class="selected-file-name">No file selected</span>
        <button class="submit-project-btn">Request Quote</button>
      </div> <!-- upload-section -->
    </div>   <!-- portal-wrapper -->
  </div>     <!-- container-one -->
</section>   <!-- section-navy -->


<!-- Section 5 (white) -->
  <!-- Section 5 (white) -->
<section class="section-white">
  <div class="container d-flex justify-content-center">
    <div class="cta-card"><br><br><br>
      <h2 class="cta-title">Your Next Project Awaits</h2>
      <p class="cta-subtitle">
        Let's collaborate to create something truly exceptional.<br> Our team is ready to help you bring your vision to life.
      </p>
      <div class="cta-buttons">
        <a href="#" class="btn btn-primary">INQUIRE</a>
        <a href="#" class="btn btn-secondary">PURCHASE</a>
      </div>
    </div>
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
      <img src="<?= base_url('assets_system/images/header_logo.png') ?>" height="40" alt="Logo">
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
    // Simple JavaScript to display the selected file name
  document.getElementById('file-upload').addEventListener('change', function() {
    const fileName = this.files.length > 0 ? this.files[0].name : 'No file selected';
    document.getElementById('file-name').textContent = fileName;
  });
  </script>
</body>
</html>
