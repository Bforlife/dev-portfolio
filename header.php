<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    
<style>
    .logo-circle {
        width: 80px;
        height: 80px;
        background-color: #ff6600; 
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 10px;
  
    }
  
 
      @media (max-width: 576px) {
        .logo-circle {
          width: 50px;
          height: 50px;
        }
        .logo-text {
          font-size: 1rem;
        }
      }
      .rotate-90 {
      transform: rotate(360deg);
      transition: transform 0.3s ease; 
    }
    </style>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
      <!-- Logo Section -->
      <div class="logo-circle">
        <img src="Pics/Logo (2).png" alt="Mma's Logo" class="logo-img me-2 logo-text">
      </div>
      <a class="navbar-brand d-flex align-items-center" href="#">
        <!-- <img src="Pics/Logo (2).png" alt="Mma's Logo" class="logo-img me-2"> -->
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="#hero">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#cta-button">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#blog">Blog</a>
          </li>
        </ul>
        <a href="#contact"  id="contactButton" class="btn btn-warning">Contact Us</a>
      </div>
    </div>
  </nav>
</body>
</html>