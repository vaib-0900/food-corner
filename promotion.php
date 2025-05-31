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
    :root {
      --primary: #ff6b6b;
      --secondary: #ffa502;
      --dark: #2f3542;
      --light: #f1f2f6;
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      overflow-x: hidden;
    }
    
    /* Custom Navbar */
    .navbar {
      background: rgba(47, 53, 66, 0.9) !important;
      backdrop-filter: blur(10px);
    }
    
    .navbar-brand {
      font-weight: 700;
      font-size: 1.8rem;
    }
    
    .nav-link {
      font-weight: 500;
      position: relative;
    }
    
    .nav-link::after {
      content: '';
      position: absolute;
      width: 0;
      height: 3px;
      bottom: 0;
      left: 0;
      background: var(--primary);
      transition: width 0.3s;
    }
    
    .nav-link:hover::after {
      width: 100%;
    }
    
    /* Hero Section */
    .hero {
      background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                  url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');
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
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .promo-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0,0,0,0.2);
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
      background: rgba(255,255,255,0.1);
      top: -50px;
      right: -50px;
    }
    
    .app-section::after {
      content: '';
      position: absolute;
      width: 200px;
      height: 200px;
      border-radius: 50%;
      background: rgba(255,255,255,0.1);
      bottom: -50px;
      left: -50px;
    }
    
    .app-phone {
      transform: perspective(1000px) rotateY(-15deg);
      filter: drop-shadow(0 20px 30px rgba(0,0,0,0.3));
      transition: all 0.5s;
    }
    
    .app-phone:hover {
      transform: perspective(1000px) rotateY(0deg);
    }
    
    /* Video Section */
    .video-wrapper {
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 20px 50px rgba(0,0,0,0.2);
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
      background: rgba(255,255,255,0.1);
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
      0% { transform: translateY(0px); }
      50% { transform: translateY(-15px); }
      100% { transform: translateY(0px); }
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="fas fa-utensils me-2"></i>Food Corner
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#promotions">Promotions</a></li>
          <li class="nav-item"><a class="nav-link" href="#app">Mobile App</a></li>
          <li class="nav-item"><a class="nav-link" href="#video">Our Hotel</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

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
            <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Burger Deal">
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
            <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Pizza Deal">
            <div class="card-body">
              <h5 class="card-title">Family Pizza Fest</h5>
              <p class="card-text">Large pizza + 4 drinks for just $19.99. Weekend special!</p>
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
            <img src="https://images.unsplash.com/photo-1551963831-b3b1ca40c98e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Breakfast Deal">
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
<section id="app" class="app-promo-section py-7 position-relative overflow-hidden">
  <!-- Animated Background Elements -->
  <div class="position-absolute top-0 start-0 w-100 h-100">
    <div class="position-absolute rounded-circle" style="width: 400px; height: 400px; background: rgba(255,255,255,0.05); top: -100px; left: -100px;"></div>
    <div class="position-absolute rounded-circle" style="width: 600px; height: 600px; background: rgba(255,255,255,0.03); bottom: -300px; right: -200px;"></div>
  </div>

  <!-- Floating Food Icons -->
  <div class="floating-elements">
    <i class="fas fa-hamburger position-absolute text-white-10" style="font-size: 5rem; top: 20%; left: 5%; animation: float 6s ease-in-out infinite;"></i>
    <i class="fas fa-pizza-slice position-absolute text-white-10" style="font-size: 4rem; bottom: 30%; right: 10%; animation: float 8s ease-in-out infinite 2s;"></i>
    <i class="fas fa-ice-cream position-absolute text-white-10" style="font-size: 6rem; top: 40%; right: 15%; animation: float 7s ease-in-out infinite 1s;"></i>
  </div>

  <div class="container position-relative z-2">
    <div class="row align-items-center g-5">
      <!-- App Mockup - Left Side -->
      <div class="col-lg-6">
        <div class="app-mockup-wrapper position-relative" style="max-width: 320px; margin: 0 auto;">
          <!-- iPhone Frame -->
          <div class="device-frame position-relative" style="border-radius: 40px; padding: 12px; background: #0f0f12; box-shadow: 0 30px 60px rgba(0,0,0,0.3), inset 0 0 0 2px rgba(255,255,255,0.1);">
            <!-- Screen Content -->
            <div class="app-screen overflow-hidden position-relative" style="border-radius: 28px; height: 620px; background: linear-gradient(45deg, #6a11cb 0%, #2575fc 100%);">
              <!-- Dynamic App Slideshow -->
              <div class="app-slideshow h-100">
                <!-- Slide 1 - Featured Offer -->
                <div class="app-slide h-100 position-relative" style="padding: 20px;">
                  <div class="d-flex justify-content-between align-items-center mb-4">
                    <span class="text-white fw-bold">Food Corner</span>
                    <i class="fas fa-search text-white"></i>
                  </div>
                  
                  <div class="text-center mb-5">
                    <div class="mx-auto mb-3" style="width: 80px; height: 80px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                      <i class="fas fa-fire text-white" style="font-size: 2rem;"></i>
                    </div>
                    <h5 class="text-white mb-2">Today's Special</h5>
                    <div class="bg-white text-dark rounded-pill py-2 px-3 d-inline-block fw-bold">
                      60% OFF All Burgers
                    </div>
                  </div>
                  
                  <div class="food-item-card bg-white rounded-3 p-3 mb-3 shadow">
                    <div class="d-flex">
                      <div class="flex-shrink-0 food-item-img" style="background-image: url('https://images.unsplash.com/photo-1568901346375-23c9450c58cd?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80');"></div>
                      <div class="flex-grow-1 ms-3">
                        <h6 class="mb-0">Mega Burger</h6>
                        <small class="text-muted">Double patty with cheese</small>
                        <div class="d-flex justify-content-between mt-2">
                          <span class="text-danger fw-bold">$7.99 <small class="text-decoration-line-through text-muted">$19.99</small></span>
                          <button class="btn btn-sm btn-danger rounded-circle" style="width: 30px; height: 30px; padding: 0;">+</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="food-item-card bg-white rounded-3 p-3 shadow">
                    <div class="d-flex">
                      <div class="flex-shrink-0 food-item-img" style="background-image: url('https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80');"></div>
                      <div class="flex-grow-1 ms-3">
                        <h6 class="mb-0">Pepperoni Pizza</h6>
                        <small class="text-muted">12" with extra cheese</small>
                        <div class="d-flex justify-content-between mt-2">
                          <span class="text-dark fw-bold">$12.99</span>
                          <button class="btn btn-sm btn-primary rounded-circle" style="width: 30px; height: 30px; padding: 0;">+</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Bottom Navigation -->
              <div class="position-absolute bottom-0 start-0 end-0 d-flex justify-content-around p-3" style="background: rgba(0,0,0,0.2);">
                <i class="fas fa-home text-white"></i>
                <i class="fas fa-search text-white-50"></i>
                <i class="fas fa-shopping-cart text-white-50"></i>
                <i class="fas fa-user text-white-50"></i>
              </div>
            </div>
          </div>
          
          <!-- Glow Effect -->
          <div class="position-absolute top-50 start-50 translate-middle" style="width: 150%; height: 150%; background: radial-gradient(circle, rgba(106,17,203,0.3) 0%, rgba(37,117,252,0.1) 50%, transparent 70%); z-index: -1;"></div>
        </div>
      </div>
      
      <!-- Content - Right Side -->
      <div class="col-lg-6">
        <div class="ps-lg-5">
          <div class="badge bg-white text-dark mb-3 py-2 px-3 mt-3 rounded-pill d-inline-flex align-items-center">
            <i class="fas fa-star text-warning me-2"></i>
            <span>4.9 Rating (10K+ Reviews)</span>
          </div>
          
          <h2 class="display-4 fw-bold text-white mb-4">Experience Food <span class="text-warning">Like Never Before</span></h2>
          
          <p class="lead text-white mb-5">Our award-winning app makes ordering food faster, easier, and more rewarding than ever!</p>
          
          <!-- Features Grid -->
          <div class="row g-4 mb-5">
            <div class="col-md-6">
              <div class="feature-card bg-white bg-opacity-10 p-4 rounded-4 h-100 border border-white border-opacity-10">
                <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 50px; height: 50px;">
                  <i class="fas fa-bolt text-white"></i>
                </div>
                <h5 class="text-white">Lightning Fast</h5>
                <p class="text-white-50 mb-0">Order food in under 30 seconds with our optimized flow</p>
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="feature-card bg-white bg-opacity-10 p-4 rounded-4 h-100 border border-white border-opacity-10">
                <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 50px; height: 50px;">
                  <i class="fas fa-gem text-white"></i>
                </div>
                <h5 class="text-white">VIP Rewards</h5>
                <p class="text-white-50 mb-0">Exclusive deals for our regular customers</p>
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="feature-card bg-white bg-opacity-10 p-4 rounded-4 h-100 border border-white border-opacity-10">
                <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 50px; height: 50px;">
                  <i class="fas fa-map-marker-alt text-white"></i>
                </div>
                <h5 class="text-white">Live Tracking</h5>
                <p class="text-white-50 mb-0">Real-time delivery tracking with ETA updates</p>
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="feature-card bg-white bg-opacity-10 p-4 rounded-4 h-100 border border-white border-opacity-10">
                <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 50px; height: 50px;">
                  <i class="fas fa-wallet text-white"></i>
                </div>
                <h5 class="text-white">Easy Payments</h5>
                <p class="text-white-50 mb-0">Multiple secure payment options</p>
              </div>
            </div>
          </div>
          
          <!-- Download Buttons -->
          <div class="d-flex flex-wrap gap-3">
            <a href="#" class="btn-download btn-google-play shadow-lg">
              <div class="btn-icon">
                <i class="fab fa-google-play"></i>
              </div>
              <div class="btn-text">
                <span>Get it on</span>
                <strong>Google Play</strong>
              </div>
            </a>
            
            <a href="#" class="btn-download btn-app-store shadow-lg">
              <div class="btn-icon">
                <i class="fab fa-apple"></i>
              </div>
              <div class="btn-text">
                <span>Download on the</span>
                <strong>App Store</strong>
              </div>
            </a>
          </div>
          
          <!-- Trust Badges -->
          <div class="d-flex flex-wrap gap-3 mt-4 mb-3">
            <div class="trust-badge">
              <i class="fas fa-shield-alt text-success me-2"></i>
              <span>100% Secure</span>
            </div>
            <div class="trust-badge">
              <i class="fas fa-sync-alt text-info me-2"></i>
              <span>Easy Refunds</span>
            </div>
            <div class="trust-badge">
              <i class="fas fa-headset text-primary me-2"></i>
              <span>24/7 Support</span>
            </div>
          </div>
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
    0% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
    100% { transform: translateY(0px); }
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
    background: rgba(255,255,255,0.15) !important;
    border-color: rgba(255,255,255,0.3) !important;
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
    box-shadow: 0 15px 30px rgba(0,0,0,0.2) !important;
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
    background: rgba(255,255,255,0.1);
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
              <iframe src="https://www.youtube.com/embed/YOUR_VIDEO_ID" 
                      title="Hotel Management Video" 
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
  <footer class="footer text-white py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 mb-md-0">
          <h5><i class="fas fa-utensils me-2"></i>Food Corner</h5>
          <p>Delicious food, unforgettable experiences.</p>
        </div>
        <div class="col-md-4 mb-4 mb-md-0">
          <h5>Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Menu</a></li>
            <li><a href="#" class="text-white">About Us</a></li>
            <li><a href="#" class="text-white">Careers</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>Contact</h5>
          <ul class="list-unstyled">
            <li><i class="fas fa-map-marker-alt me-2"></i> 123 Food Street, City</li>
            <li><i class="fas fa-phone me-2"></i> (123) 456-7890</li>
            <li><i class="fas fa-envelope me-2"></i> info@foodcorner.com</li>
          </ul>
        </div>
      </div>
      <hr class="my-4">
      <div class="text-center">
        <p class="mb-0">&copy; 2023 Food Corner. All rights reserved.</p>
      </div>
    </div>
  </footer>

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
    window.addEventListener('scroll', function() {
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