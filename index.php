

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mma's Code - Portfolio</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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

</head>
<body>
  
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
      

<!-- HERO SECTION -->
<section class="hero-section d-flex align-items-center" id="hero">
    <div class="container text-center text-md-start">
      <div class="row">
        <div class="col-md-6 d-none d-md-block">
            <img src="Pics/girl30.jpg" alt="Designer Image" class="img-fluid" width="500" style="border-radius: 20px;">
          </div>
        <div class="col-md-6  m-auto">
          <!-- <p class="text-muted" id="subtitle">I AM DESIGNER</p> -->
          <h1 class="display-4" id="main-title">
            Creative Design  and <br> <span class="highlight"> Web Developer</span>
          </h1>
          <p class="text-muted mt-3" id="description">
            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
            placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et.
          </p>
          <a href="cv.html" class="btn btn-warning mt-3" id="cta-button">Download My CV</a>
         
        </div>
      
      </div>
    </div>
  </section>

  <!-- 2 -->

  <section class="hero-section-2 d-flex align-items-center gap-4 mt-5" id="hero">
    <div class="container text-center text-md-start">
      <div class="row">
       
        <div class="col-md-6  m-auto pt-3">
            <h1 class="about-me">I Can <span class="highlight"> Design Anything</span> You Want </h1>
          <!-- <p class="text-muted" id="subtitle">I AM DESIGNER</p> -->
        
          <p class="text-muted mt-4 fs-6" id="description">
            I offer a range of services designed to help clients achieve a strong digital presence.<br> My approach emphasizes responsive design and smooth animations, ensuring a seamless experience across all devices.<br> 
           This profile reflects my commitment to blending creativity with technical expertise. From mobile app development and graphic design to SEO optimization and business strategy.
          </p>
          <div class="statistics my-5 ">
            <div>
              <i class="fas fa-check-circle" style="color: #ff6a00; font-size: 1.5em;"></i>
              <span>21+</span>
              <p>Complete Project</p>
            </div>
            <div class="m-auto">
              <i class="fas fa-clock" style="color: #ff6a00; font-size: 1.5em;"></i>
              <span>2+</span>
              <p>Years of Experience</p>
            </div>
          </div>
          <!--  -->
          <div class="statistics">
            <div>
              <p>
                  Work simple and clean design</p>
              <p> 
                New idea and user-friendly design</p>
            </div> 
            <div>
              <p class="mx-3">
                Web Design Full stack</p>
              <p class="mx-3">
                Unlimited Revisions</p>
            </div>
          </div>
      
          <a href="cv.html" class="btn btn-warning mt-3" id="cta-button">Download My CV</a>
        </div>
      
        <div class="col-md-6 d-none d-md-block mt-4 pt-4 ">
            <img src="Pics/girlImg.jpg" alt="Designer Image" class="img-fluid rotate-90  shadow-sm" width="600" style="border-radius: 20px;">
          </div>
      </div>
    </div>
  </section>
      

    
   

<section id="services">
    <div class="container-service">
        <h2 class="section-title" style="margin-top: 30px;">SERVICES I OFFER</h2>
        <div class="services-grid">
          
            <div class="service-box">
                <i class="service-icon fas fa-mobile-alt"></i>
                <h4>Mobile App Development</h4>
                <p>Building cross-platform mobile apps that meet business needs.</p>
            </div>
            <div class="service-box">
                <i class="service-icon fas fa-paint-brush"></i>
                <h4>Graphic Design</h4>
                <p>Creating engaging graphic designs for businesses and brands.</p>
            </div>
            <div class="service-box">
                <i class="service-icon fas fa-code"></i>
                <h4>Web Development</h4>
                <p>Developing responsive and dynamic websites for various sectors.</p>
            </div>
            <div class="service-box">
                <i class="service-icon fas fa-search"></i>
                <h4>SEO Optimization</h4>
                <p>Improving website SEO for better visibility and higher rankings.</p>
            </div>
       
            <div class="service-box">
                <i class="service-icon fas fa-cogs"></i>
                <h4>App Development</h4>
                <p>Developing powerful web applications using modern technologies.</p>
            </div>
            <div class="service-box">
                <i class="service-icon fas fa-chart-line"></i>
                <h4>Business Strategy</h4>
                <p>Offering strategic solutions to enhance business growth and performance.</p>
            </div>
        </div>
    </div>
</section>


<!-- blog section check -->

<section id="blog">
    <div class="container-blog" >
        <h2 class="section-title">LATEST BLOG</h2>
        <div class="blog-grid">
            <div class="blog-post">
                <img src="Pics/P30.jpg" alt="Blog 1 Image">
                <div class="blog-content">
                <div class="post-meta text-muted d-flex justify-content-start align-items-center mb-3">
                        <span class="author me-3"><i class="bi bi-person" style="color:var(--highlight-color)"></i> Mma's Code</span>
                        <span class="date"><i class="bi bi-calendar" style="color:var(--highlight-color)"></i> 
                          <?php echo date("d.m.Y"); ?>
                        </span>
                        </div>
                    <h3>5 Essential Keyboard Shortcuts for Efficient Coding</h3>
                    <a href="blog1.php" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="blog-post">
                <img src="Pics/P32.jpg" alt="Blog 2 Image">
                <div class="blog-content">
                    <p class="blog-date">
                        <div class="post-meta text-muted d-flex justify-content-start align-items-center mb-3">
                        <span class="author me-3"><i class="bi bi-person" style="color:var(--highlight-color)"></i> Mma's Code</span>
                        <span class="date"><i class="bi bi-calendar" style="color:var(--highlight-color)"></i> 
                          <?php echo date("d.m.Y"); ?>
                        </span>
                        </div>
                        
                    </p>
                    <h3>Top 10 Tools to Boost Your Productivity as a Developer</h3>
                    <a href="blog2.php" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="blog-post">
                <img src="Pics/P31.jpg" alt="Blog 3 Image">
                <div class="blog-content">
                <div class="post-meta text-muted d-flex justify-content-start align-items-center mb-3">
                        <span class="author me-3"><i class="bi bi-person" style="color:var(--highlight-color)"></i> Mma's Code</span>
                        <span class="date"><i class="bi bi-calendar" style="color:var(--highlight-color)"></i> 
                          <?php echo date("d.m.Y"); ?>
                        </span>
                        </div>
                    <h3>How to Write Clean and Maintainable Code</h3>
                    <a href="blog3.php" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
    
    
<!-- Contact Section -->
<section id="contact" class="contact">
    <div class="container-form">
        <form action="insert.php" method="POST">
            <h2>Contact Me</h2>
            <p style="font-size: 20px; color:var(--text-color);">
              If you'd like to discuss a project or just want to say hi, feel free to drop a message.</p>
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <button type="submit" class="message">Send Message</button>
        </form>
    </div>
</section>

<footer class="footer">
  <div class="container">
    <div class="footer-content">
      <!-- Left Section -->
      <div class="footer-brand">
        <h2>Mma's Code</h2>
        <p>
          At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.
        </p>
        <p>mma.scode@gmail.com</p>
      </div>

      <!-- Center Links Section -->
      <div class="footer-links">
        <h4>Explore Link</h4>
        <ul>
          <li><a href="#cta-button">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#hero">Portfolio</a></li>
          <li><a href="#blog">Blog</a></li>
        </ul>
      </div>

      <!-- Services Section -->
      <div class="footer-services">
        <h4>My Services</h4>
        <ul>
          <li><a href="#services">UI/UX Design</a></li>
          <li><a href="#hero">Mobile App</a></li>
          <li><a href="#services">Graphics Design</a></li>
          <li><a href="#blog">Web Development</a></li>
        </ul>
      </div>

      <!-- Social and Contact Section -->
      <div class="footer-contact">
        <h4>Follow Me</h4>
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-dribbble"></i></a>
          <a href="#"><i class="fab fa-behance"></i></a>
        </div>
        <p><i class="fas fa-map-marker-alt"></i> Enugu Express Road Abakaliki 480106</p>
        <p><i class="fas fa-phone"></i> 08101875471</p>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2024 Mma's Code | <a href="#">Terms & Conditions</a> | <a href="#">Privacy Policy</a></p>
  </div>
</footer>



<!-- Scroll-to-Top Button -->
<div id="scrollTop">↑</div>



</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="index.js"></script>
</html>
