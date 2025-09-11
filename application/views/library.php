<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Library - Line Seiki Asia Pacific</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      background-color: white;
      color: black;
      font-family: Arial, Helvetica, sans-serif;
      padding-top: 80px; /* space for fixed navbar */
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


    /* ✅ Library Sections */
    .library {
      padding: 60px 10%;
    }
    .library h1 {
      text-align: center;
      font-size: 2.5rem;
      margin-bottom: 40px;
      color: none;
    }
    .library-section {
      margin-bottom: 80px;
    }
    .download-card {
      background: #0d1b2a;
      border-radius: 12px;
      padding: 50px;
      text-align: center;
      transition: transform 0.2s;
      color: #ffd60a;
    }
    .download-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    .download-card h5 {
      margin-bottom: 15px;
      font-weight: bold
      color: #ffd60a;
    }
    .btn-download {
      background: #ff6a5c;
      color: #fff;
      border: none;
      padding: 8px 16px;
      border-radius: 6px;
      font-weight: 500;
      transition: background 0.3s ease;
    }
    .btn-download:hover {
      background: #e85a4a;
    }

    /* ✅ Modal form */
    .modal-header {
      background: #0d1b2a;
      color: #fff;
    }
    .modal-footer .btn {
      min-width: 120px;
    }
    h2{
      color: none;
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
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about_us">About Us</a></li>

          <!-- ✅ Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              Product and Services
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="ps_prod">Products</a></li>
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">Services</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Simulation Analysis</a></li>
                  <li><a class="dropdown-item" href="#">Silicone Molding & Urethane Casting</a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="ps_iotsolution">IoT Solution</a></li>
            </ul>
          </li>

          <li class="nav-item"><a class="nav-link" href="news_event">News and Events</a></li>
          <li class="nav-item"><a class="nav-link active" href="library">Library</a></li>
          <li class="nav-item"><a class="nav-link" href="contact_us">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ✅ Library Section -->
  <section class="library">
    <h1>Library</h1>

    <!-- Case Studies -->
   <!-- Case Studies -->
<div class="library-section text-center">
  <h2>Case Studies</h2>
  <p class="text-muted">Download our case studies after filling up the form.</p>
  <div class="row g-4 justify-content-center">
    <div class="col-md-4">
      <div class="download-card">
        <h5>Case Study 1</h5>
        <button class="btn-download" data-bs-toggle="modal" data-bs-target="#downloadModal" data-file="case-study-1.pdf">Download</button>
      </div>
    </div>
    <div class="col-md-4">
      <div class="download-card">
        <h5>Case Study 2</h5>
        <button class="btn-download" data-bs-toggle="modal" data-bs-target="#downloadModal" data-file="case-study-2.pdf">Download</button>
      </div>
    </div>
  </div>
</div>


    <!-- Brochures -->
<div class="library-section text-center">
  <h2>Brochures</h2>
  <p class="text-muted">Download our brochures after filling up the form.</p>
  <div class="row g-4 justify-content-center">
    <div class="col-md-4">
      <div class="download-card">
        <h5>Company Profile</h5>
        <button class="btn-download" data-bs-toggle="modal" data-bs-target="#downloadModal" data-file="company-profile.pdf">Download</button>
      </div>
    </div>
    <div class="col-md-4">
      <div class="download-card">
        <h5>Products & Services</h5>
        <button class="btn-download" data-bs-toggle="modal" data-bs-target="#downloadModal" data-file="products-services.pdf">Download</button>
      </div>
    </div>
  </div>
</div>


  <!-- ✅ Modal Form -->
  <div class="modal fade" id="downloadModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <form class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Fill out the form to download</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="fileToDownload">
          <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Company</label>
            <input type="text" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Position</label>
            <input type="text" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Submit & Download</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Capture which file to download
    let selectedFile = "";
    const modal = document.getElementById("downloadModal");
    modal.addEventListener("show.bs.modal", function (event) {
      const button = event.relatedTarget;
      selectedFile = button.getAttribute("data-file");
      document.getElementById("fileToDownload").value = selectedFile;
    });

    // Handle form submission
    document.querySelector("#downloadModal form").addEventListener("submit", function(e){
      e.preventDefault();
      const file = document.getElementById("fileToDownload").value;
      // ✅ trigger file download
      window.location.href = "downloads/" + file; // <-- adjust folder path
      const modalInstance = bootstrap.Modal.getInstance(modal);
      modalInstance.hide();
      this.reset();
    });
        document.querySelectorAll('.dropdown-submenu .dropdown-toggle').forEach(function (element) {
    element.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      let submenu = this.nextElementSibling;

      // Close any open submenus
      let openSubmenus = this.closest('.dropdown-menu').querySelectorAll('.dropdown-menu.show');
      openSubmenus.forEach(function (open) {
        if (open !== submenu) open.classList.remove('show');
      });

      // Toggle current submenu
      submenu.classList.toggle('show');
    });
  });

  // Close submenu when parent dropdown closes
  document.querySelectorAll('.dropdown').forEach(function (dropdown) {
    dropdown.addEventListener('hide.bs.dropdown', function () {
      this.querySelectorAll('.dropdown-menu.show').forEach(function (submenu) {
        submenu.classList.remove('show');
      });
    });
  });
  </script>
</body>
</html>
