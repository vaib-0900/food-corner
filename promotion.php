<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Food Corner | Delicious Promotions</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <style>
    /* Hero Section */
    .hero {
      background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('images/banner.png');
      background-size: cover;
      background-position: center;
      min-height: 80vh;
    }

    /* Promotion Cards */
    .promo-card {
      border: none;
      border-radius: 15px;
      overflow: hidden;
      transition: all 0.4s;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .promo-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    .promo-card .card-img-top {
      height: 200px;
      object-fit: cover;
    }

    .promo-card .badge {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 1rem;
    }

    /* App Section */
    .app-section {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      position: relative;
      overflow: hidden;
    }

    .app-section::before {
      content: '';
      position: absolute;
      width: 300px;
      height: 300px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.1);
      top: -50px;
      right: -50px;
    }

    .app-section::after {
      content: '';
      position: absolute;
      width: 200px;
      height: 200px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.1);
      bottom: -50px;
      left: -50px;
    }

    .app-phone {
      transform: perspective(1000px) rotateY(-15deg);
      filter: drop-shadow(0 20px 30px rgba(0, 0, 0, 0.3));
      transition: all 0.5s;
    }

    .app-phone:hover {
      transform: perspective(1000px) rotateY(0deg);
    }

    /* Video Section */
    .video-wrapper {
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
      transform: perspective(1000px) rotateX(5deg);
      transition: all 0.5s;
    }

    .video-wrapper:hover {
      transform: perspective(1000px) rotateX(0deg);
    }

    /* Footer */
    .footer {
      background: var(--dark);
      position: relative;
    }

    .footer::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 10px;
      background: linear-gradient(to right, var(--primary), var(--secondary));
    }

    .social-icon {
      width: 50px;
      height: 50px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      transition: all 0.3s;
    }

    .social-icon:hover {
      background: var(--primary);
      transform: translateY(-5px);
    }

    /* Floating Elements */
    .floating {
      animation: floating 3s ease-in-out infinite;
    }

    @keyframes floating {
      0% {
        transform: translateY(0px);
      }

      50% {
        transform: translateY(-15px);
      }

      100% {
        transform: translateY(0px);
      }
    }
  </style>
</head>

<body>


  <!-- Hero Section -->
  <section id="home" class="hero d-flex align-items-center text-white">
    <div class="container text-center animate__animated animate__fadeIn">
      <h1 class="display-3 fw-bold mb-4">Taste the <span class="text-warning">Difference</span></h1>
      <p class="lead mb-5">Discover our exclusive promotions and download our app for special offers!</p>
      <div>
        <a href="#promotions" class="btn btn-primary btn-lg px-4 me-3">View Promotions</a>
        <a href="#app" class="btn btn-outline-light btn-lg px-4">Get the App</a>
      </div>
    </div>
  </section>

  <!-- Promotions Section -->
  <section id="promotions" class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold">🔥 Hot <span class="text-danger">Promotions</span></h2>
        <p class="text-muted">Limited time offers - grab them before they're gone!</p>
      </div>

      <div class="row g-4">
        <!-- Promotion 1 -->
        <div class="col-md-4">
          <div class="promo-card card h-100 animate__animated animate__fadeInUp">
            <span class="badge bg-danger">50% OFF</span>
            <img
              src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
              class="card-img-top" alt="Burger Deal">
            <div class="card-body">
              <h5 class="card-title">Mega Burger Monday</h5>
              <p class="card-text">Buy one giant burger, get one free! Every Monday only.</p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted"><i class="far fa-clock me-1"></i>Until Dec 30</small>
              </div>
            </div>
          </div>
        </div>

        <!-- Promotion 2 -->
        <div class="col-md-4">
          <div class="promo-card card h-100 animate__animated animate__fadeInUp animate__delay-1s">
            <span class="badge bg-success">Family Deal</span>
            <img
              src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
              class="card-img-top" alt="Pizza Deal">
            <div class="card-body">
              <h5 class="card-title">Family Pizza Fest</h5>
              <p class="card-text">Large pizza + 4 drinks for just ₹75. Weekend special!</p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted"><i class="far fa-clock me-1"></i>Weekends only</small>
              </div>
            </div>
          </div>
        </div>

        <!-- Promotion 3 -->
        <div class="col-md-4">
          <div class="promo-card card h-100 animate__animated animate__fadeInUp animate__delay-2s">
            <span class="badge bg-warning text-dark">Early Bird</span>
            <img
              src="https://images.unsplash.com/photo-1551963831-b3b1ca40c98e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
              class="card-img-top" alt="Breakfast Deal">
            <div class="card-body">
              <h5 class="card-title">Early Bird Breakfast</h5>
              <p class="card-text">50% off all breakfast items from 7AM-9AM.</p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted"><i class="far fa-clock me-1"></i>Daily offer</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- App Section -->
  <section id="app" class="app-section py-5 text-white">
    <div class="container">
      <div class="row align-items-center">
        <!-- Mobile Device Frame (Left Side) -->
        <div class="col-lg-6 mb-5 mb-lg-0 order-lg-1 order-2 text-center">
          <div class="device-frame mx-auto position-relative floating" style="max-width: 300px;">
            <!-- Device Outline -->
            <div class="position-relative"
              style="border: 12px solid #222; border-radius: 40px; height: 600px; width: 300px; overflow: hidden; box-shadow: 0 20px 50px rgba(0,0,0,0.3);">
              <!-- Device Notch -->
              <div
                style="position: absolute; top: 0; left: 50%; transform: translateX(-50%); width: 50%; height: 25px; background: #222; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; z-index: 10;">
              </div>
              <!-- App Screen Content -->
              <div class="h-100" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                <!-- App Header -->
                <div class="d-flex justify-content-between align-items-center p-3" style="background: rgba(0,0,0,0.2);">
                  <span class="text-white fw-bold">Food Corner</span>
                  <i class="fas fa-search text-white"></i>
                </div>

                <!-- Featured Promotion -->
                <div class="text-center p-4">
                  <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                    style="width: 80px; height: 80px;">
                    <i class="fas fa-utensils text-primary fa-2x"></i>
                  </div>
                  <h5 class="text-white mb-1">Special Offer!</h5>
                  <p class="text-white-50 small mb-3">Today only</p>
                  <div class="bg-white text-dark rounded-pill py-2 px-3 d-inline-block">
                    <span class="fw-bold">50% OFF</span> All Burgers
                  </div>
                </div>

                <!-- Food Items -->
                <div class="px-3">
                  <div class="bg-white rounded-3 p-3 mb-3 shadow-sm">
                    <div class="d-flex">
                      <div class="flex-shrink-0"
                        style="width: 60px; height: 60px; background: #eee; border-radius: 10px; overflow: hidden;">
                        <img
                          src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80"
                          style="width: 100%; height: 100%; object-fit: cover;">
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h6 class="mb-0 text-dark">Mega Burger</h6>
                        <small class="text-muted">Double patty with cheese</small>
                        <div class="d-flex justify-content-between mt-1">
                          <span class="text-dark fw-bold">$9.99</span>
                          <button class="btn btn-sm btn-primary py-0 px-2">+</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="bg-white rounded-3 p-3 shadow-sm">
                    <div class="d-flex">
                      <div class="flex-shrink-0"
                        style="width: 60px; height: 60px; background: #eee; border-radius: 10px; overflow: hidden;">
                        <img
                          src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80"
                          style="width: 100%; height: 100%; object-fit: cover;">
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h6 class="mb-0 text-dark">Pepperoni Pizza</h6>
                        <small class="text-muted">12" with extra cheese</small>
                        <div class="d-flex justify-content-between mt-1">
                          <span class="text-dark fw-bold">$12.99</span>
                          <button class="btn btn-sm btn-primary py-0 px-2">+</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Bottom Navigation -->
                <div class="position-absolute bottom-0 start-0 end-0 d-flex justify-content-around p-3"
                  style="background: rgba(0,0,0,0.1);">
                  <i class="fas fa-home text-white"></i>
                  <i class="fas fa-search text-white-50"></i>
                  <i class="fas fa-shopping-cart text-white-50"></i>
                  <i class="fas fa-user text-white-50"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- App Content (Right Side) -->
        <div class="col-lg-6 order-lg-2 order-1 mb-5 mb-lg-0">
          <h2 class="display-5 fw-bold mb-4">Download Our <span class="text-warning">Mobile App</span></h2>
          <p class="lead mb-4">Get exclusive app-only deals and order food with just a few taps!</p>

          <div class="row g-4 mb-4">
            <div class="col-md-6">
              <div class="d-flex align-items-center bg-white bg-opacity-10 p-3 rounded-3 h-100">
                <div class="bg-white text-primary rounded-circle p-2 me-3 flex-shrink-0">
                  <i class="fas fa-bolt fa-lg"></i>
                </div>
                <div>
                  <h6 class="mb-1">Lightning Fast</h6>
                  <p class="small mb-0 text-white-50">Order food in under 30 seconds</p>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="d-flex align-items-center bg-white bg-opacity-10 p-3 rounded-3 h-100">
                <div class="bg-white text-primary rounded-circle p-2 me-3 flex-shrink-0">
                  <i class="fas fa-gift fa-lg"></i>
                </div>
                <div>
                  <h6 class="mb-1">Exclusive Deals</h6>
                  <p class="small mb-0 text-white-50">App-only discounts & offers</p>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="d-flex align-items-center bg-white bg-opacity-10 p-3 rounded-3 h-100">
                <div class="bg-white text-primary rounded-circle p-2 me-3 flex-shrink-0">
                  <i class="fas fa-coins fa-lg"></i>
                </div>
                <div>
                  <h6 class="mb-1">Loyalty Rewards</h6>
                  <p class="small mb-0 text-white-50">Earn points with every order</p>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="d-flex align-items-center bg-white bg-opacity-10 p-3 rounded-3 h-100">
                <div class="bg-white text-primary rounded-circle p-2 me-3 flex-shrink-0">
                  <i class="fas fa-bell fa-lg"></i>
                </div>
                <div>
                  <h6 class="mb-1">Real-Time Alerts</h6>
                  <p class="small mb-0 text-white-50">Order status notifications</p>
                </div>
              </div>
            </div>
          </div>

          <div class="d-flex flex-wrap gap-3">
            <a href="https://play.google.com/store/apps/details?id=com.foodcorner.app"
              class="btn btn-light btn-lg px-4 py-3 d-flex align-items-center">
              <i class="fab fa-google-play fa-2x me-2"></i>
              <div class="text-start">
                <small class="d-block">Get it on</small>
                <span class="fw-bold">Google Play</span>
              </div>
            </a>

            <a href="#" class="btn btn-outline-light btn-lg px-4 py-3 d-flex align-items-center">
              <i class="fab fa-apple fa-2x me-2"></i>
              <div class="text-start">
                <small class="d-block">Download on the</small>
                <span class="fw-bold">App Store</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <style>
    .app-promo-section {
      background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
      color: white;
      position: relative;
      overflow: hidden;
    }

    /* Floating Animation */
    @keyframes float {
      0% {
        transform: translateY(0px);
      }

      50% {
        transform: translateY(-20px);
      }

      100% {
        transform: translateY(0px);
      }
    }

    /* App Mockup Styling */
    .app-mockup-wrapper {
      perspective: 1000px;
    }

    .device-frame {
      transform: rotateY(-10deg);
      transition: transform 0.5s ease;
    }

    .app-mockup-wrapper:hover .device-frame {
      transform: rotateY(0deg);
    }

    .food-item-img {
      width: 60px;
      height: 60px;
      border-radius: 10px;
      background-size: cover;
      background-position: center;
    }

    /* Feature Cards */
    .feature-card {
      transition: all 0.3s ease;
    }

    .feature-card:hover {
      transform: translateY(-5px);
      background: rgba(255, 255, 255, 0.15) !important;
      border-color: rgba(255, 255, 255, 0.3) !important;
    }

    /* Download Buttons */
    .btn-download {
      display: flex;
      align-items: center;
      padding: 12px 20px;
      border-radius: 12px;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .btn-google-play {
      background: #1a1a1a;
      color: white;
    }

    .btn-app-store {
      background: white;
      color: #1a1a1a;
    }

    .btn-download:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2) !important;
    }

    .btn-icon {
      font-size: 1.8rem;
      margin-right: 12px;
    }

    .btn-text {
      display: flex;
      flex-direction: column;
      line-height: 1.2;
    }

    .btn-text span {
      font-size: 0.8rem;
    }

    .btn-text strong {
      font-size: 1.2rem;
    }

    /* Trust Badges */
    .trust-badge {
      background: rgba(255, 255, 255, 0.1);
      padding: 6px 12px;
      border-radius: 20px;
      font-size: 0.9rem;
      display: inline-flex;
      align-items: center;
    }
  </style>

  <script>
    // Simple animation to make the app mockup interactive
    document.querySelectorAll('.food-item-card').forEach((card, index) => {
      card.style.transitionDelay = `${index * 0.1}s`;
      card.addEventListener('mouseenter', () => {
        card.style.transform = 'translateY(-5px)';
      });
      card.addEventListener('mouseleave', () => {
        card.style.transform = 'translateY(0)';
      });
    });
  </script>

  <!-- Video Section -->
  <section id="video" class="py-5 bg-white">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold">🏨 Our <span class="text-primary">Hotel</span> Experience</h2>
        <p class="text-muted">Discover our premium food services and hospitality</p>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="video-wrapper">
            <!-- Replace with your YouTube embed code -->
            <div class="ratio ratio-16x9">
              <iframe src="https://www.youtube.com/embed/YOUR_VIDEO_ID" title="Hotel Management Video"
                allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-5 bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2 class="display-5 fw-bold mb-4">Stay Connected</h2>
          <p class="lead mb-5">Follow us for daily updates and special offers!</p>
          <div class="d-flex justify-content-center gap-4 mb-5">
            <a href="#" class="social-icon text-white bg-primary">
              <i class="fab fa-facebook-f fa-lg"></i>
            </a>
            <a href="#" class="social-icon text-white bg-danger">
              <i class="fab fa-instagram fa-lg"></i>
            </a>
            <a href="#" class="social-icon text-white bg-info">
              <i class="fab fa-twitter fa-lg"></i>
            </a>
            <a href="#" class="social-icon text-white bg-danger">
              <i class="fab fa-youtube fa-lg"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php
  include "footer.php";
  ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });

    // Navbar background change on scroll
    window.addEventListener('scroll', function () {
      const navbar = document.querySelector('.navbar');
      if (window.scrollY > 50) {
        navbar.classList.add('bg-dark', 'shadow');
      } else {
        navbar.classList.remove('bg-dark', 'shadow');
      }
    });
  </script>
</body>

</html>